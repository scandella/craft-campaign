<?php
/**
 * @copyright Copyright (c) PutYourLightsOn
 */

namespace putyourlightson\campaign\records;

use craft\db\ActiveRecord;

/**
 * @property int $id
 * @property string $segmentType
 * @property array $conditions
 * @property string $template
 */
class SegmentRecord extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName(): string
    {
        return '{{%campaign_segments}}';
    }
}
