<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dingTalkHookUrl  dingTalkHookUrl
    * groupName  告警组名称
    * id  告警组ID
    * weChatWorkHookUrl  weChatWorkHookUrl
    * weLinkGroupNo  weLinkGroupNo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dingTalkHookUrl' => 'string',
            'groupName' => 'string',
            'id' => 'string',
            'weChatWorkHookUrl' => 'string',
            'weLinkGroupNo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dingTalkHookUrl  dingTalkHookUrl
    * groupName  告警组名称
    * id  告警组ID
    * weChatWorkHookUrl  weChatWorkHookUrl
    * weLinkGroupNo  weLinkGroupNo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dingTalkHookUrl' => null,
        'groupName' => null,
        'id' => null,
        'weChatWorkHookUrl' => null,
        'weLinkGroupNo' => null
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
    * dingTalkHookUrl  dingTalkHookUrl
    * groupName  告警组名称
    * id  告警组ID
    * weChatWorkHookUrl  weChatWorkHookUrl
    * weLinkGroupNo  weLinkGroupNo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dingTalkHookUrl' => 'dingTalkHookUrl',
            'groupName' => 'group_name',
            'id' => 'id',
            'weChatWorkHookUrl' => 'weChatWorkHookUrl',
            'weLinkGroupNo' => 'weLinkGroupNo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dingTalkHookUrl  dingTalkHookUrl
    * groupName  告警组名称
    * id  告警组ID
    * weChatWorkHookUrl  weChatWorkHookUrl
    * weLinkGroupNo  weLinkGroupNo
    *
    * @var string[]
    */
    protected static $setters = [
            'dingTalkHookUrl' => 'setDingTalkHookUrl',
            'groupName' => 'setGroupName',
            'id' => 'setId',
            'weChatWorkHookUrl' => 'setWeChatWorkHookUrl',
            'weLinkGroupNo' => 'setWeLinkGroupNo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dingTalkHookUrl  dingTalkHookUrl
    * groupName  告警组名称
    * id  告警组ID
    * weChatWorkHookUrl  weChatWorkHookUrl
    * weLinkGroupNo  weLinkGroupNo
    *
    * @var string[]
    */
    protected static $getters = [
            'dingTalkHookUrl' => 'getDingTalkHookUrl',
            'groupName' => 'getGroupName',
            'id' => 'getId',
            'weChatWorkHookUrl' => 'getWeChatWorkHookUrl',
            'weLinkGroupNo' => 'getWeLinkGroupNo'
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
        $this->container['dingTalkHookUrl'] = isset($data['dingTalkHookUrl']) ? $data['dingTalkHookUrl'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['weChatWorkHookUrl'] = isset($data['weChatWorkHookUrl']) ? $data['weChatWorkHookUrl'] : null;
        $this->container['weLinkGroupNo'] = isset($data['weLinkGroupNo']) ? $data['weLinkGroupNo'] : null;
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
    * Gets dingTalkHookUrl
    *  dingTalkHookUrl
    *
    * @return string|null
    */
    public function getDingTalkHookUrl()
    {
        return $this->container['dingTalkHookUrl'];
    }

    /**
    * Sets dingTalkHookUrl
    *
    * @param string|null $dingTalkHookUrl dingTalkHookUrl
    *
    * @return $this
    */
    public function setDingTalkHookUrl($dingTalkHookUrl)
    {
        $this->container['dingTalkHookUrl'] = $dingTalkHookUrl;
        return $this;
    }

    /**
    * Gets groupName
    *  告警组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 告警组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets id
    *  告警组ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 告警组ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets weChatWorkHookUrl
    *  weChatWorkHookUrl
    *
    * @return string|null
    */
    public function getWeChatWorkHookUrl()
    {
        return $this->container['weChatWorkHookUrl'];
    }

    /**
    * Sets weChatWorkHookUrl
    *
    * @param string|null $weChatWorkHookUrl weChatWorkHookUrl
    *
    * @return $this
    */
    public function setWeChatWorkHookUrl($weChatWorkHookUrl)
    {
        $this->container['weChatWorkHookUrl'] = $weChatWorkHookUrl;
        return $this;
    }

    /**
    * Gets weLinkGroupNo
    *  weLinkGroupNo
    *
    * @return string|null
    */
    public function getWeLinkGroupNo()
    {
        return $this->container['weLinkGroupNo'];
    }

    /**
    * Sets weLinkGroupNo
    *
    * @param string|null $weLinkGroupNo weLinkGroupNo
    *
    * @return $this
    */
    public function setWeLinkGroupNo($weLinkGroupNo)
    {
        $this->container['weLinkGroupNo'] = $weLinkGroupNo;
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

