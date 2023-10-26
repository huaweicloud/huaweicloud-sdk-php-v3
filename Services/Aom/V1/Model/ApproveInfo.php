<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApproveInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApproveInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicSelected  审批人主题选择。
    * needApprove  是否审核,默认是不审核，true，false。
    * smnUrnList  审批主题urn集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicSelected' => 'string',
            'needApprove' => 'bool',
            'smnUrnList' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicSelected  审批人主题选择。
    * needApprove  是否审核,默认是不审核，true，false。
    * smnUrnList  审批主题urn集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicSelected' => null,
        'needApprove' => null,
        'smnUrnList' => null
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
    * topicSelected  审批人主题选择。
    * needApprove  是否审核,默认是不审核，true，false。
    * smnUrnList  审批主题urn集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicSelected' => 'topic_selected',
            'needApprove' => 'need_approve',
            'smnUrnList' => 'smn_urn_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicSelected  审批人主题选择。
    * needApprove  是否审核,默认是不审核，true，false。
    * smnUrnList  审批主题urn集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'topicSelected' => 'setTopicSelected',
            'needApprove' => 'setNeedApprove',
            'smnUrnList' => 'setSmnUrnList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicSelected  审批人主题选择。
    * needApprove  是否审核,默认是不审核，true，false。
    * smnUrnList  审批主题urn集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'topicSelected' => 'getTopicSelected',
            'needApprove' => 'getNeedApprove',
            'smnUrnList' => 'getSmnUrnList'
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
        $this->container['topicSelected'] = isset($data['topicSelected']) ? $data['topicSelected'] : null;
        $this->container['needApprove'] = isset($data['needApprove']) ? $data['needApprove'] : null;
        $this->container['smnUrnList'] = isset($data['smnUrnList']) ? $data['smnUrnList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['topicSelected']) && (mb_strlen($this->container['topicSelected']) > 2048)) {
                $invalidProperties[] = "invalid value for 'topicSelected', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['topicSelected']) && (mb_strlen($this->container['topicSelected']) < 1)) {
                $invalidProperties[] = "invalid value for 'topicSelected', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['smnUrnList']) && (mb_strlen($this->container['smnUrnList']) > 2048)) {
                $invalidProperties[] = "invalid value for 'smnUrnList', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['smnUrnList']) && (mb_strlen($this->container['smnUrnList']) < 1)) {
                $invalidProperties[] = "invalid value for 'smnUrnList', the character length must be bigger than or equal to 1.";
            }
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
    * Gets topicSelected
    *  审批人主题选择。
    *
    * @return string|null
    */
    public function getTopicSelected()
    {
        return $this->container['topicSelected'];
    }

    /**
    * Sets topicSelected
    *
    * @param string|null $topicSelected 审批人主题选择。
    *
    * @return $this
    */
    public function setTopicSelected($topicSelected)
    {
        $this->container['topicSelected'] = $topicSelected;
        return $this;
    }

    /**
    * Gets needApprove
    *  是否审核,默认是不审核，true，false。
    *
    * @return bool|null
    */
    public function getNeedApprove()
    {
        return $this->container['needApprove'];
    }

    /**
    * Sets needApprove
    *
    * @param bool|null $needApprove 是否审核,默认是不审核，true，false。
    *
    * @return $this
    */
    public function setNeedApprove($needApprove)
    {
        $this->container['needApprove'] = $needApprove;
        return $this;
    }

    /**
    * Gets smnUrnList
    *  审批主题urn集合。
    *
    * @return string|null
    */
    public function getSmnUrnList()
    {
        return $this->container['smnUrnList'];
    }

    /**
    * Sets smnUrnList
    *
    * @param string|null $smnUrnList 审批主题urn集合。
    *
    * @return $this
    */
    public function setSmnUrnList($smnUrnList)
    {
        $this->container['smnUrnList'] = $smnUrnList;
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

