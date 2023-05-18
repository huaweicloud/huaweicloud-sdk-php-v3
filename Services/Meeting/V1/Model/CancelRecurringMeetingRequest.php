<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CancelRecurringMeetingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CancelRecurringMeetingRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xAuthorizationType  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    * userUuid  用户的UUID。 > 该参数将废弃，请勿使用。
    * xSiteId  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    * conferenceId  会议ID。
    * type  取消会议操作类型。默认已召开的会议不能取消。 * 1：需要结束正在召开的会议
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xAuthorizationType' => 'string',
            'userUuid' => 'string',
            'xSiteId' => 'string',
            'conferenceId' => 'string',
            'type' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xAuthorizationType  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    * userUuid  用户的UUID。 > 该参数将废弃，请勿使用。
    * xSiteId  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    * conferenceId  会议ID。
    * type  取消会议操作类型。默认已召开的会议不能取消。 * 1：需要结束正在召开的会议
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xAuthorizationType' => null,
        'userUuid' => null,
        'xSiteId' => null,
        'conferenceId' => null,
        'type' => 'int32'
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
    * xAuthorizationType  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    * userUuid  用户的UUID。 > 该参数将废弃，请勿使用。
    * xSiteId  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    * conferenceId  会议ID。
    * type  取消会议操作类型。默认已召开的会议不能取消。 * 1：需要结束正在召开的会议
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xAuthorizationType' => 'X-Authorization-Type',
            'userUuid' => 'userUUID',
            'xSiteId' => 'X-Site-Id',
            'conferenceId' => 'conferenceID',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xAuthorizationType  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    * userUuid  用户的UUID。 > 该参数将废弃，请勿使用。
    * xSiteId  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    * conferenceId  会议ID。
    * type  取消会议操作类型。默认已召开的会议不能取消。 * 1：需要结束正在召开的会议
    *
    * @var string[]
    */
    protected static $setters = [
            'xAuthorizationType' => 'setXAuthorizationType',
            'userUuid' => 'setUserUuid',
            'xSiteId' => 'setXSiteId',
            'conferenceId' => 'setConferenceId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xAuthorizationType  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    * userUuid  用户的UUID。 > 该参数将废弃，请勿使用。
    * xSiteId  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    * conferenceId  会议ID。
    * type  取消会议操作类型。默认已召开的会议不能取消。 * 1：需要结束正在召开的会议
    *
    * @var string[]
    */
    protected static $getters = [
            'xAuthorizationType' => 'getXAuthorizationType',
            'userUuid' => 'getUserUuid',
            'xSiteId' => 'getXSiteId',
            'conferenceId' => 'getConferenceId',
            'type' => 'getType'
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
        $this->container['xAuthorizationType'] = isset($data['xAuthorizationType']) ? $data['xAuthorizationType'] : null;
        $this->container['userUuid'] = isset($data['userUuid']) ? $data['userUuid'] : null;
        $this->container['xSiteId'] = isset($data['xSiteId']) ? $data['xSiteId'] : null;
        $this->container['conferenceId'] = isset($data['conferenceId']) ? $data['conferenceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['conferenceId'] === null) {
            $invalidProperties[] = "'conferenceId' can't be null";
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
    * Gets xAuthorizationType
    *  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getXAuthorizationType()
    {
        return $this->container['xAuthorizationType'];
    }

    /**
    * Sets xAuthorizationType
    *
    * @param string|null $xAuthorizationType 标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setXAuthorizationType($xAuthorizationType)
    {
        $this->container['xAuthorizationType'] = $xAuthorizationType;
        return $this;
    }

    /**
    * Gets userUuid
    *  用户的UUID。 > 该参数将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getUserUuid()
    {
        return $this->container['userUuid'];
    }

    /**
    * Sets userUuid
    *
    * @param string|null $userUuid 用户的UUID。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setUserUuid($userUuid)
    {
        $this->container['userUuid'] = $userUuid;
        return $this;
    }

    /**
    * Gets xSiteId
    *  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getXSiteId()
    {
        return $this->container['xSiteId'];
    }

    /**
    * Sets xSiteId
    *
    * @param string|null $xSiteId 用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setXSiteId($xSiteId)
    {
        $this->container['xSiteId'] = $xSiteId;
        return $this;
    }

    /**
    * Gets conferenceId
    *  会议ID。
    *
    * @return string
    */
    public function getConferenceId()
    {
        return $this->container['conferenceId'];
    }

    /**
    * Sets conferenceId
    *
    * @param string $conferenceId 会议ID。
    *
    * @return $this
    */
    public function setConferenceId($conferenceId)
    {
        $this->container['conferenceId'] = $conferenceId;
        return $this;
    }

    /**
    * Gets type
    *  取消会议操作类型。默认已召开的会议不能取消。 * 1：需要结束正在召开的会议
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 取消会议操作类型。默认已召开的会议不能取消。 * 1：需要结束正在召开的会议
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

