<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BucketSplitInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BucketSplitInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentDnNum  **参数解释**： 当前DN数。 **取值范围**： 不涉及。
    * afterScaleOutDnNum  **参数解释**： 扩容后DN数。 **取值范围**： 不涉及。
    * currentBucketNum  **参数解释**： 当前bucket数。 **取值范围**： 不涉及。
    * afterScaleOutBucketNum  **参数解释**： 扩容后bucket数。 **取值范围**： 不涉及。
    * isBucketSplit  **参数解释**： 扩容是否涉及bucket分裂。 **取值范围**： 不涉及。
    * bucketTiltRate  **参数解释**： bucket DN倾斜率，用于衡量bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    * afterScaleOutBucketTiltRate  **参数解释**： 扩容后 bucket DN倾斜率，用于衡量扩容后bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentDnNum' => 'int',
            'afterScaleOutDnNum' => 'int',
            'currentBucketNum' => 'int',
            'afterScaleOutBucketNum' => 'int',
            'isBucketSplit' => 'bool',
            'bucketTiltRate' => 'string',
            'afterScaleOutBucketTiltRate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentDnNum  **参数解释**： 当前DN数。 **取值范围**： 不涉及。
    * afterScaleOutDnNum  **参数解释**： 扩容后DN数。 **取值范围**： 不涉及。
    * currentBucketNum  **参数解释**： 当前bucket数。 **取值范围**： 不涉及。
    * afterScaleOutBucketNum  **参数解释**： 扩容后bucket数。 **取值范围**： 不涉及。
    * isBucketSplit  **参数解释**： 扩容是否涉及bucket分裂。 **取值范围**： 不涉及。
    * bucketTiltRate  **参数解释**： bucket DN倾斜率，用于衡量bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    * afterScaleOutBucketTiltRate  **参数解释**： 扩容后 bucket DN倾斜率，用于衡量扩容后bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentDnNum' => 'int32',
        'afterScaleOutDnNum' => 'int32',
        'currentBucketNum' => 'int32',
        'afterScaleOutBucketNum' => 'int32',
        'isBucketSplit' => null,
        'bucketTiltRate' => null,
        'afterScaleOutBucketTiltRate' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * currentDnNum  **参数解释**： 当前DN数。 **取值范围**： 不涉及。
    * afterScaleOutDnNum  **参数解释**： 扩容后DN数。 **取值范围**： 不涉及。
    * currentBucketNum  **参数解释**： 当前bucket数。 **取值范围**： 不涉及。
    * afterScaleOutBucketNum  **参数解释**： 扩容后bucket数。 **取值范围**： 不涉及。
    * isBucketSplit  **参数解释**： 扩容是否涉及bucket分裂。 **取值范围**： 不涉及。
    * bucketTiltRate  **参数解释**： bucket DN倾斜率，用于衡量bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    * afterScaleOutBucketTiltRate  **参数解释**： 扩容后 bucket DN倾斜率，用于衡量扩容后bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentDnNum' => 'current_dn_num',
            'afterScaleOutDnNum' => 'after_scale_out_dn_num',
            'currentBucketNum' => 'current_bucket_num',
            'afterScaleOutBucketNum' => 'after_scale_out_bucket_num',
            'isBucketSplit' => 'is_bucket_split',
            'bucketTiltRate' => 'bucket_tilt_rate',
            'afterScaleOutBucketTiltRate' => 'after_scale_out_bucket_tilt_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentDnNum  **参数解释**： 当前DN数。 **取值范围**： 不涉及。
    * afterScaleOutDnNum  **参数解释**： 扩容后DN数。 **取值范围**： 不涉及。
    * currentBucketNum  **参数解释**： 当前bucket数。 **取值范围**： 不涉及。
    * afterScaleOutBucketNum  **参数解释**： 扩容后bucket数。 **取值范围**： 不涉及。
    * isBucketSplit  **参数解释**： 扩容是否涉及bucket分裂。 **取值范围**： 不涉及。
    * bucketTiltRate  **参数解释**： bucket DN倾斜率，用于衡量bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    * afterScaleOutBucketTiltRate  **参数解释**： 扩容后 bucket DN倾斜率，用于衡量扩容后bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'currentDnNum' => 'setCurrentDnNum',
            'afterScaleOutDnNum' => 'setAfterScaleOutDnNum',
            'currentBucketNum' => 'setCurrentBucketNum',
            'afterScaleOutBucketNum' => 'setAfterScaleOutBucketNum',
            'isBucketSplit' => 'setIsBucketSplit',
            'bucketTiltRate' => 'setBucketTiltRate',
            'afterScaleOutBucketTiltRate' => 'setAfterScaleOutBucketTiltRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentDnNum  **参数解释**： 当前DN数。 **取值范围**： 不涉及。
    * afterScaleOutDnNum  **参数解释**： 扩容后DN数。 **取值范围**： 不涉及。
    * currentBucketNum  **参数解释**： 当前bucket数。 **取值范围**： 不涉及。
    * afterScaleOutBucketNum  **参数解释**： 扩容后bucket数。 **取值范围**： 不涉及。
    * isBucketSplit  **参数解释**： 扩容是否涉及bucket分裂。 **取值范围**： 不涉及。
    * bucketTiltRate  **参数解释**： bucket DN倾斜率，用于衡量bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    * afterScaleOutBucketTiltRate  **参数解释**： 扩容后 bucket DN倾斜率，用于衡量扩容后bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'currentDnNum' => 'getCurrentDnNum',
            'afterScaleOutDnNum' => 'getAfterScaleOutDnNum',
            'currentBucketNum' => 'getCurrentBucketNum',
            'afterScaleOutBucketNum' => 'getAfterScaleOutBucketNum',
            'isBucketSplit' => 'getIsBucketSplit',
            'bucketTiltRate' => 'getBucketTiltRate',
            'afterScaleOutBucketTiltRate' => 'getAfterScaleOutBucketTiltRate'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['currentDnNum'] = isset($data['currentDnNum']) ? $data['currentDnNum'] : null;
        $this->container['afterScaleOutDnNum'] = isset($data['afterScaleOutDnNum']) ? $data['afterScaleOutDnNum'] : null;
        $this->container['currentBucketNum'] = isset($data['currentBucketNum']) ? $data['currentBucketNum'] : null;
        $this->container['afterScaleOutBucketNum'] = isset($data['afterScaleOutBucketNum']) ? $data['afterScaleOutBucketNum'] : null;
        $this->container['isBucketSplit'] = isset($data['isBucketSplit']) ? $data['isBucketSplit'] : null;
        $this->container['bucketTiltRate'] = isset($data['bucketTiltRate']) ? $data['bucketTiltRate'] : null;
        $this->container['afterScaleOutBucketTiltRate'] = isset($data['afterScaleOutBucketTiltRate']) ? $data['afterScaleOutBucketTiltRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets currentDnNum
    *  **参数解释**： 当前DN数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCurrentDnNum()
    {
        return $this->container['currentDnNum'];
    }

    /**
    * Sets currentDnNum
    *
    * @param int|null $currentDnNum **参数解释**： 当前DN数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCurrentDnNum($currentDnNum)
    {
        $this->container['currentDnNum'] = $currentDnNum;
        return $this;
    }

    /**
    * Gets afterScaleOutDnNum
    *  **参数解释**： 扩容后DN数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAfterScaleOutDnNum()
    {
        return $this->container['afterScaleOutDnNum'];
    }

    /**
    * Sets afterScaleOutDnNum
    *
    * @param int|null $afterScaleOutDnNum **参数解释**： 扩容后DN数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAfterScaleOutDnNum($afterScaleOutDnNum)
    {
        $this->container['afterScaleOutDnNum'] = $afterScaleOutDnNum;
        return $this;
    }

    /**
    * Gets currentBucketNum
    *  **参数解释**： 当前bucket数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCurrentBucketNum()
    {
        return $this->container['currentBucketNum'];
    }

    /**
    * Sets currentBucketNum
    *
    * @param int|null $currentBucketNum **参数解释**： 当前bucket数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCurrentBucketNum($currentBucketNum)
    {
        $this->container['currentBucketNum'] = $currentBucketNum;
        return $this;
    }

    /**
    * Gets afterScaleOutBucketNum
    *  **参数解释**： 扩容后bucket数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAfterScaleOutBucketNum()
    {
        return $this->container['afterScaleOutBucketNum'];
    }

    /**
    * Sets afterScaleOutBucketNum
    *
    * @param int|null $afterScaleOutBucketNum **参数解释**： 扩容后bucket数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAfterScaleOutBucketNum($afterScaleOutBucketNum)
    {
        $this->container['afterScaleOutBucketNum'] = $afterScaleOutBucketNum;
        return $this;
    }

    /**
    * Gets isBucketSplit
    *  **参数解释**： 扩容是否涉及bucket分裂。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getIsBucketSplit()
    {
        return $this->container['isBucketSplit'];
    }

    /**
    * Sets isBucketSplit
    *
    * @param bool|null $isBucketSplit **参数解释**： 扩容是否涉及bucket分裂。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIsBucketSplit($isBucketSplit)
    {
        $this->container['isBucketSplit'] = $isBucketSplit;
        return $this;
    }

    /**
    * Gets bucketTiltRate
    *  **参数解释**： bucket DN倾斜率，用于衡量bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBucketTiltRate()
    {
        return $this->container['bucketTiltRate'];
    }

    /**
    * Sets bucketTiltRate
    *
    * @param string|null $bucketTiltRate **参数解释**： bucket DN倾斜率，用于衡量bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBucketTiltRate($bucketTiltRate)
    {
        $this->container['bucketTiltRate'] = $bucketTiltRate;
        return $this;
    }

    /**
    * Gets afterScaleOutBucketTiltRate
    *  **参数解释**： 扩容后 bucket DN倾斜率，用于衡量扩容后bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAfterScaleOutBucketTiltRate()
    {
        return $this->container['afterScaleOutBucketTiltRate'];
    }

    /**
    * Sets afterScaleOutBucketTiltRate
    *
    * @param string|null $afterScaleOutBucketTiltRate **参数解释**： 扩容后 bucket DN倾斜率，用于衡量扩容后bucket在DN节点上不均衡程度。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAfterScaleOutBucketTiltRate($afterScaleOutBucketTiltRate)
    {
        $this->container['afterScaleOutBucketTiltRate'] = $afterScaleOutBucketTiltRate;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

