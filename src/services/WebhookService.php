<?php
/**
 * @link      https://craftcampaign.com
 * @copyright Copyright (c) PutYourLightsOn
 */

namespace putyourlightson\campaign\services;

use craft\errors\ElementNotFoundException;
use DateTime;
use putyourlightson\campaign\Campaign;
use putyourlightson\campaign\elements\ContactElement;

use Craft;
use craft\base\Component;
use putyourlightson\campaign\records\ContactCampaignRecord;
use Throwable;
use yii\base\Exception;

/**
 * WebhookService
 *
 * @author    PutYourLightsOn
 * @package   Campaign
 * @since     1.0.0
 */
class WebhookService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * Complain
     *
     * @param ContactElement $contact
     *
     * @throws ElementNotFoundException
     * @throws Exception
     * @throws Throwable
     */
    public function complain(ContactElement $contact)
    {
        $this->_addInteraction($contact, 'complained');
    }

    /**
     * Bounce
     *
     * @param ContactElement          $contact
     *
     * @throws ElementNotFoundException
     * @throws Exception
     * @throws Throwable
     */
    public function bounce(ContactElement $contact)
    {
        $this->_addInteraction($contact, 'bounced');
    }

    // Private Methods
    // =========================================================================

    /**
     * Add interaction
     *
     * @param ContactElement $contact
     * @param string $interaction
     *
     * @throws Throwable
     * @throws ElementNotFoundException
     * @throws Exception
     */
    private function _addInteraction(ContactElement $contact, string $interaction)
    {
        // Get all contact campaigns
        $contactCampaignRecords = ContactCampaignRecord::find()
            ->where(['contactId' => $contact->id])
            ->all();

        foreach ($contactCampaignRecords as $contactCampaignRecord) {
            $mailingList = Campaign::$plugin->mailingLists->getMailingListById($contactCampaignRecord->mailingListId);

            if ($mailingList !== null) {
                // Add contact interaction to mailing list
                Campaign::$plugin->mailingLists->addContactInteraction($contact, $mailingList, $interaction);
            }

            $sendout = Campaign::$plugin->sendouts->getSendoutById($contactCampaignRecord->sendoutId);

            if ($sendout !== null) {
                // Add contact interaction to campaign
                Campaign::$plugin->campaigns->addContactInteraction($contact, $sendout, $interaction);
            }
        }

        // Update contact
        if ($contact->{$interaction} === null) {
            $contact->{$interaction} = new DateTime();

            Craft::$app->getElements()->saveElement($contact);
        }
    }
}
