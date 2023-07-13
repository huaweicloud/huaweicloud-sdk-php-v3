<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestInviteWithPwdReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestInviteWithPwdReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * callNum  被邀请者的SIP号码。
    * orgId  被邀请者所属企业ID。
    * confId  会议ID。
    * pwd  会议的密码（主持人或者来宾）。
    * numBelongsType  SIP号码类型。默认是0。 * 0：华为云会议的号码 * 1：VC会议的号码
    * isNotOverlayPidName  是否不叠加会场名（VDC场景下适用）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'callNum' => 'string',
            'orgId' => 'string',
            'confId' => 'string',
            'pwd' => 'string',
            'numBelongsType' => 'int',
            'isNotOverlayPidName' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * callNum  被邀请者的SIP号码。
    * orgId  被邀请者所属企业ID。
    * confId  会议ID。
    * pwd  会议的密码（主持人或者来宾）。
    * numBelongsType  SIP号码类型。默认是0。 * 0：华为云会议的号码 * 1：VC会议的号码
    * isNotOverlayPidName  是否不叠加会场名（VDC场景下适用）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'callNum' => null,
        'orgId' => null,
        'confId' => null,
        'pwd' => null,
        'numBelongsType' => null,
        'isNotOverlayPidName' => 'int64'
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
    * callNum  被邀请者的SIP号码。
    * orgId  被邀请者所属企业ID。
    * confId  会议ID。
    * pwd  会议的密码（主持人或者来宾）。
    * numBelongsType  SIP号码类型。默认是0。 * 0：华为云会议的号码 * 1：VC会议的号码
    * isNotOverlayPidName  是否不叠加会场名（VDC场景下适用）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'callNum' => 'callNum',
            'orgId' => 'orgID',
            'confId' => 'confID',
            'pwd' => 'pwd',
            'numBelongsType' => 'numBelongsType',
            'isNotOverlayPidName' => 'isNotOverlayPidName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * callNum  被邀请者的SIP号码。
    * orgId  被邀请者所属企业ID。
    * confId  会议ID。
    * pwd  会议的密码（主持人或者来宾）。
    * numBelongsType  SIP号码类型。默认是0。 * 0：华为云会议的号码 * 1：VC会议的号码
    * isNotOverlayPidName  是否不叠加会场名（VDC场景下适用）。
    *
    * @var string[]
    */
    protected static $setters = [
            'callNum' => 'setCallNum',
            'orgId' => 'setOrgId',
            'confId' => 'setConfId',
            'pwd' => 'setPwd',
            'numBelongsType' => 'setNumBelongsType',
            'isNotOverlayPidName' => 'setIsNotOverlayPidName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * callNum  被邀请者的SIP号码。
    * orgId  被邀请者所属企业ID。
    * confId  会议ID。
    * pwd  会议的密码（主持人或者来宾）。
    * numBelongsType  SIP号码类型。默认是0。 * 0：华为云会议的号码 * 1：VC会议的号码
    * isNotOverlayPidName  是否不叠加会场名（VDC场景下适用）。
    *
    * @var string[]
    */
    protected static $getters = [
            'callNum' => 'getCallNum',
            'orgId' => 'getOrgId',
            'confId' => 'getConfId',
            'pwd' => 'getPwd',
            'numBelongsType' => 'getNumBelongsType',
            'isNotOverlayPidName' => 'getIsNotOverlayPidName'
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
        $this->container['callNum'] = isset($data['callNum']) ? $data['callNum'] : null;
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
        $this->container['confId'] = isset($data['confId']) ? $data['confId'] : null;
        $this->container['pwd'] = isset($data['pwd']) ? $data['pwd'] : null;
        $this->container['numBelongsType'] = isset($data['numBelongsType']) ? $data['numBelongsType'] : null;
        $this->container['isNotOverlayPidName'] = isset($data['isNotOverlayPidName']) ? $data['isNotOverlayPidName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['callNum'] === null) {
            $invalidProperties[] = "'callNum' can't be null";
        }
        if ($this->container['confId'] === null) {
            $invalidProperties[] = "'confId' can't be null";
        }
        if ($this->container['pwd'] === null) {
            $invalidProperties[] = "'pwd' can't be null";
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
    * Gets callNum
    *  被邀请者的SIP号码。
    *
    * @return string
    */
    public function getCallNum()
    {
        return $this->container['callNum'];
    }

    /**
    * Sets callNum
    *
    * @param string $callNum 被邀请者的SIP号码。
    *
    * @return $this
    */
    public function setCallNum($callNum)
    {
        $this->container['callNum'] = $callNum;
        return $this;
    }

    /**
    * Gets orgId
    *  被邀请者所属企业ID。
    *
    * @return string|null
    */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
    * Sets orgId
    *
    * @param string|null $orgId 被邀请者所属企业ID。
    *
    * @return $this
    */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;
        return $this;
    }

    /**
    * Gets confId
    *  会议ID。
    *
    * @return string
    */
    public function getConfId()
    {
        return $this->container['confId'];
    }

    /**
    * Sets confId
    *
    * @param string $confId 会议ID。
    *
    * @return $this
    */
    public function setConfId($confId)
    {
        $this->container['confId'] = $confId;
        return $this;
    }

    /**
    * Gets pwd
    *  会议的密码（主持人或者来宾）。
    *
    * @return string
    */
    public function getPwd()
    {
        return $this->container['pwd'];
    }

    /**
    * Sets pwd
    *
    * @param string $pwd 会议的密码（主持人或者来宾）。
    *
    * @return $this
    */
    public function setPwd($pwd)
    {
        $this->container['pwd'] = $pwd;
        return $this;
    }

    /**
    * Gets numBelongsType
    *  SIP号码类型。默认是0。 * 0：华为云会议的号码 * 1：VC会议的号码
    *
    * @return int|null
    */
    public function getNumBelongsType()
    {
        return $this->container['numBelongsType'];
    }

    /**
    * Sets numBelongsType
    *
    * @param int|null $numBelongsType SIP号码类型。默认是0。 * 0：华为云会议的号码 * 1：VC会议的号码
    *
    * @return $this
    */
    public function setNumBelongsType($numBelongsType)
    {
        $this->container['numBelongsType'] = $numBelongsType;
        return $this;
    }

    /**
    * Gets isNotOverlayPidName
    *  是否不叠加会场名（VDC场景下适用）。
    *
    * @return bool|null
    */
    public function getIsNotOverlayPidName()
    {
        return $this->container['isNotOverlayPidName'];
    }

    /**
    * Sets isNotOverlayPidName
    *
    * @param bool|null $isNotOverlayPidName 是否不叠加会场名（VDC场景下适用）。
    *
    * @return $this
    */
    public function setIsNotOverlayPidName($isNotOverlayPidName)
    {
        $this->container['isNotOverlayPidName'] = $isNotOverlayPidName;
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

