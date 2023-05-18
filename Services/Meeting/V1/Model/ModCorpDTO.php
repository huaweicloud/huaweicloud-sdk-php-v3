<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModCorpDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModCorpDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * basicInfo  basicInfo
    * adminInfo  adminInfo
    * groupId  媒体接入（包括SBC和MCU）分组id，可通过[[SP管理员查询资源信息](https://support.huaweicloud.com/api-meeting/meeting_21_1537.html)](tag:hws)[[SP管理员查询资源信息](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1537.html)](tag:hk)接口查询获取。
    * propertyInfo  可配置项信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'basicInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\ModCorpBasicDTO',
            'adminInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\ModAdminDTO',
            'groupId' => 'string',
            'propertyInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\OrgPropertyDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * basicInfo  basicInfo
    * adminInfo  adminInfo
    * groupId  媒体接入（包括SBC和MCU）分组id，可通过[[SP管理员查询资源信息](https://support.huaweicloud.com/api-meeting/meeting_21_1537.html)](tag:hws)[[SP管理员查询资源信息](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1537.html)](tag:hk)接口查询获取。
    * propertyInfo  可配置项信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'basicInfo' => null,
        'adminInfo' => null,
        'groupId' => null,
        'propertyInfo' => null
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
    * basicInfo  basicInfo
    * adminInfo  adminInfo
    * groupId  媒体接入（包括SBC和MCU）分组id，可通过[[SP管理员查询资源信息](https://support.huaweicloud.com/api-meeting/meeting_21_1537.html)](tag:hws)[[SP管理员查询资源信息](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1537.html)](tag:hk)接口查询获取。
    * propertyInfo  可配置项信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'basicInfo' => 'basicInfo',
            'adminInfo' => 'adminInfo',
            'groupId' => 'groupId',
            'propertyInfo' => 'propertyInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * basicInfo  basicInfo
    * adminInfo  adminInfo
    * groupId  媒体接入（包括SBC和MCU）分组id，可通过[[SP管理员查询资源信息](https://support.huaweicloud.com/api-meeting/meeting_21_1537.html)](tag:hws)[[SP管理员查询资源信息](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1537.html)](tag:hk)接口查询获取。
    * propertyInfo  可配置项信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'basicInfo' => 'setBasicInfo',
            'adminInfo' => 'setAdminInfo',
            'groupId' => 'setGroupId',
            'propertyInfo' => 'setPropertyInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * basicInfo  basicInfo
    * adminInfo  adminInfo
    * groupId  媒体接入（包括SBC和MCU）分组id，可通过[[SP管理员查询资源信息](https://support.huaweicloud.com/api-meeting/meeting_21_1537.html)](tag:hws)[[SP管理员查询资源信息](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1537.html)](tag:hk)接口查询获取。
    * propertyInfo  可配置项信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'basicInfo' => 'getBasicInfo',
            'adminInfo' => 'getAdminInfo',
            'groupId' => 'getGroupId',
            'propertyInfo' => 'getPropertyInfo'
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
        $this->container['basicInfo'] = isset($data['basicInfo']) ? $data['basicInfo'] : null;
        $this->container['adminInfo'] = isset($data['adminInfo']) ? $data['adminInfo'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['propertyInfo'] = isset($data['propertyInfo']) ? $data['propertyInfo'] : null;
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
    * Gets basicInfo
    *  basicInfo
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ModCorpBasicDTO|null
    */
    public function getBasicInfo()
    {
        return $this->container['basicInfo'];
    }

    /**
    * Sets basicInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ModCorpBasicDTO|null $basicInfo basicInfo
    *
    * @return $this
    */
    public function setBasicInfo($basicInfo)
    {
        $this->container['basicInfo'] = $basicInfo;
        return $this;
    }

    /**
    * Gets adminInfo
    *  adminInfo
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\ModAdminDTO|null
    */
    public function getAdminInfo()
    {
        return $this->container['adminInfo'];
    }

    /**
    * Sets adminInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\ModAdminDTO|null $adminInfo adminInfo
    *
    * @return $this
    */
    public function setAdminInfo($adminInfo)
    {
        $this->container['adminInfo'] = $adminInfo;
        return $this;
    }

    /**
    * Gets groupId
    *  媒体接入（包括SBC和MCU）分组id，可通过[[SP管理员查询资源信息](https://support.huaweicloud.com/api-meeting/meeting_21_1537.html)](tag:hws)[[SP管理员查询资源信息](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1537.html)](tag:hk)接口查询获取。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 媒体接入（包括SBC和MCU）分组id，可通过[[SP管理员查询资源信息](https://support.huaweicloud.com/api-meeting/meeting_21_1537.html)](tag:hws)[[SP管理员查询资源信息](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_1537.html)](tag:hk)接口查询获取。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets propertyInfo
    *  可配置项信息。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\OrgPropertyDTO[]|null
    */
    public function getPropertyInfo()
    {
        return $this->container['propertyInfo'];
    }

    /**
    * Sets propertyInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\OrgPropertyDTO[]|null $propertyInfo 可配置项信息。
    *
    * @return $this
    */
    public function setPropertyInfo($propertyInfo)
    {
        $this->container['propertyInfo'] = $propertyInfo;
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

