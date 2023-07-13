<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CycleSubConfConfigDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CycleSubConfConfigDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * audienceCallInRestriction  允许加入网络研讨会的观众范围。 - 0：所有用户 - 2：企业内用户和被邀请用户
    * allowGuestStartConf  是否允许来宾启动会议。 - false:禁止来宾启动会议 - true：允许来宾启动会议 > 仅随机会议ID的会议生效。
    * enableWaitingRoom  是否启用等候室。
    * showAudienceCountInfo  showAudienceCountInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'callInRestriction' => 'int',
            'audienceCallInRestriction' => 'int',
            'allowGuestStartConf' => 'bool',
            'enableWaitingRoom' => 'bool',
            'showAudienceCountInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\ShowAudienceCountInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * audienceCallInRestriction  允许加入网络研讨会的观众范围。 - 0：所有用户 - 2：企业内用户和被邀请用户
    * allowGuestStartConf  是否允许来宾启动会议。 - false:禁止来宾启动会议 - true：允许来宾启动会议 > 仅随机会议ID的会议生效。
    * enableWaitingRoom  是否启用等候室。
    * showAudienceCountInfo  showAudienceCountInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'callInRestriction' => 'int32',
        'audienceCallInRestriction' => 'int32',
        'allowGuestStartConf' => null,
        'enableWaitingRoom' => null,
        'showAudienceCountInfo' => null
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
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * audienceCallInRestriction  允许加入网络研讨会的观众范围。 - 0：所有用户 - 2：企业内用户和被邀请用户
    * allowGuestStartConf  是否允许来宾启动会议。 - false:禁止来宾启动会议 - true：允许来宾启动会议 > 仅随机会议ID的会议生效。
    * enableWaitingRoom  是否启用等候室。
    * showAudienceCountInfo  showAudienceCountInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'callInRestriction' => 'callInRestriction',
            'audienceCallInRestriction' => 'audienceCallInRestriction',
            'allowGuestStartConf' => 'allowGuestStartConf',
            'enableWaitingRoom' => 'enableWaitingRoom',
            'showAudienceCountInfo' => 'showAudienceCountInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * audienceCallInRestriction  允许加入网络研讨会的观众范围。 - 0：所有用户 - 2：企业内用户和被邀请用户
    * allowGuestStartConf  是否允许来宾启动会议。 - false:禁止来宾启动会议 - true：允许来宾启动会议 > 仅随机会议ID的会议生效。
    * enableWaitingRoom  是否启用等候室。
    * showAudienceCountInfo  showAudienceCountInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'callInRestriction' => 'setCallInRestriction',
            'audienceCallInRestriction' => 'setAudienceCallInRestriction',
            'allowGuestStartConf' => 'setAllowGuestStartConf',
            'enableWaitingRoom' => 'setEnableWaitingRoom',
            'showAudienceCountInfo' => 'setShowAudienceCountInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * audienceCallInRestriction  允许加入网络研讨会的观众范围。 - 0：所有用户 - 2：企业内用户和被邀请用户
    * allowGuestStartConf  是否允许来宾启动会议。 - false:禁止来宾启动会议 - true：允许来宾启动会议 > 仅随机会议ID的会议生效。
    * enableWaitingRoom  是否启用等候室。
    * showAudienceCountInfo  showAudienceCountInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'callInRestriction' => 'getCallInRestriction',
            'audienceCallInRestriction' => 'getAudienceCallInRestriction',
            'allowGuestStartConf' => 'getAllowGuestStartConf',
            'enableWaitingRoom' => 'getEnableWaitingRoom',
            'showAudienceCountInfo' => 'getShowAudienceCountInfo'
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
        $this->container['callInRestriction'] = isset($data['callInRestriction']) ? $data['callInRestriction'] : null;
        $this->container['audienceCallInRestriction'] = isset($data['audienceCallInRestriction']) ? $data['audienceCallInRestriction'] : null;
        $this->container['allowGuestStartConf'] = isset($data['allowGuestStartConf']) ? $data['allowGuestStartConf'] : null;
        $this->container['enableWaitingRoom'] = isset($data['enableWaitingRoom']) ? $data['enableWaitingRoom'] : null;
        $this->container['showAudienceCountInfo'] = isset($data['showAudienceCountInfo']) ? $data['showAudienceCountInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['callInRestriction']) && ($this->container['callInRestriction'] > 3)) {
                $invalidProperties[] = "invalid value for 'callInRestriction', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['callInRestriction']) && ($this->container['callInRestriction'] < 0)) {
                $invalidProperties[] = "invalid value for 'callInRestriction', must be bigger than or equal to 0.";
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
    * Gets callInRestriction
    *  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @return int|null
    */
    public function getCallInRestriction()
    {
        return $this->container['callInRestriction'];
    }

    /**
    * Sets callInRestriction
    *
    * @param int|null $callInRestriction 允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @return $this
    */
    public function setCallInRestriction($callInRestriction)
    {
        $this->container['callInRestriction'] = $callInRestriction;
        return $this;
    }

    /**
    * Gets audienceCallInRestriction
    *  允许加入网络研讨会的观众范围。 - 0：所有用户 - 2：企业内用户和被邀请用户
    *
    * @return int|null
    */
    public function getAudienceCallInRestriction()
    {
        return $this->container['audienceCallInRestriction'];
    }

    /**
    * Sets audienceCallInRestriction
    *
    * @param int|null $audienceCallInRestriction 允许加入网络研讨会的观众范围。 - 0：所有用户 - 2：企业内用户和被邀请用户
    *
    * @return $this
    */
    public function setAudienceCallInRestriction($audienceCallInRestriction)
    {
        $this->container['audienceCallInRestriction'] = $audienceCallInRestriction;
        return $this;
    }

    /**
    * Gets allowGuestStartConf
    *  是否允许来宾启动会议。 - false:禁止来宾启动会议 - true：允许来宾启动会议 > 仅随机会议ID的会议生效。
    *
    * @return bool|null
    */
    public function getAllowGuestStartConf()
    {
        return $this->container['allowGuestStartConf'];
    }

    /**
    * Sets allowGuestStartConf
    *
    * @param bool|null $allowGuestStartConf 是否允许来宾启动会议。 - false:禁止来宾启动会议 - true：允许来宾启动会议 > 仅随机会议ID的会议生效。
    *
    * @return $this
    */
    public function setAllowGuestStartConf($allowGuestStartConf)
    {
        $this->container['allowGuestStartConf'] = $allowGuestStartConf;
        return $this;
    }

    /**
    * Gets enableWaitingRoom
    *  是否启用等候室。
    *
    * @return bool|null
    */
    public function getEnableWaitingRoom()
    {
        return $this->container['enableWaitingRoom'];
    }

    /**
    * Sets enableWaitingRoom
    *
    * @param bool|null $enableWaitingRoom 是否启用等候室。
    *
    * @return $this
    */
    public function setEnableWaitingRoom($enableWaitingRoom)
    {
        $this->container['enableWaitingRoom'] = $enableWaitingRoom;
        return $this;
    }

    /**
    * Gets showAudienceCountInfo
    *  showAudienceCountInfo
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ShowAudienceCountInfo|null
    */
    public function getShowAudienceCountInfo()
    {
        return $this->container['showAudienceCountInfo'];
    }

    /**
    * Sets showAudienceCountInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ShowAudienceCountInfo|null $showAudienceCountInfo showAudienceCountInfo
    *
    * @return $this
    */
    public function setShowAudienceCountInfo($showAudienceCountInfo)
    {
        $this->container['showAudienceCountInfo'] = $showAudienceCountInfo;
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

