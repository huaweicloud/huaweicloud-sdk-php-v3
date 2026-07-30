<?php

namespace HuaweiCloud\SDK\Tms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociatedResourceSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociatedResourceSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * settingName  规则的配置名称
    * masterService  主资源
    * masterResourceType  主资源类型
    * associatedService  关联资源
    * associatedResourceType  关联资源类型
    * supportExistingResource  是否规则是对存量资源生效。
    * supportAutoDelete  是否支持关系解除后自动删除标签。
    * regionIds  规则配置支持的区域Id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'settingName' => 'string',
            'masterService' => 'string',
            'masterResourceType' => 'string',
            'associatedService' => 'string',
            'associatedResourceType' => 'string',
            'supportExistingResource' => 'bool',
            'supportAutoDelete' => 'bool',
            'regionIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * settingName  规则的配置名称
    * masterService  主资源
    * masterResourceType  主资源类型
    * associatedService  关联资源
    * associatedResourceType  关联资源类型
    * supportExistingResource  是否规则是对存量资源生效。
    * supportAutoDelete  是否支持关系解除后自动删除标签。
    * regionIds  规则配置支持的区域Id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'settingName' => null,
        'masterService' => null,
        'masterResourceType' => null,
        'associatedService' => null,
        'associatedResourceType' => null,
        'supportExistingResource' => null,
        'supportAutoDelete' => null,
        'regionIds' => null
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
    * settingName  规则的配置名称
    * masterService  主资源
    * masterResourceType  主资源类型
    * associatedService  关联资源
    * associatedResourceType  关联资源类型
    * supportExistingResource  是否规则是对存量资源生效。
    * supportAutoDelete  是否支持关系解除后自动删除标签。
    * regionIds  规则配置支持的区域Id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'settingName' => 'setting_name',
            'masterService' => 'master_service',
            'masterResourceType' => 'master_resource_type',
            'associatedService' => 'associated_service',
            'associatedResourceType' => 'associated_resource_type',
            'supportExistingResource' => 'support_existing_resource',
            'supportAutoDelete' => 'support_auto_delete',
            'regionIds' => 'region_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * settingName  规则的配置名称
    * masterService  主资源
    * masterResourceType  主资源类型
    * associatedService  关联资源
    * associatedResourceType  关联资源类型
    * supportExistingResource  是否规则是对存量资源生效。
    * supportAutoDelete  是否支持关系解除后自动删除标签。
    * regionIds  规则配置支持的区域Id。
    *
    * @var string[]
    */
    protected static $setters = [
            'settingName' => 'setSettingName',
            'masterService' => 'setMasterService',
            'masterResourceType' => 'setMasterResourceType',
            'associatedService' => 'setAssociatedService',
            'associatedResourceType' => 'setAssociatedResourceType',
            'supportExistingResource' => 'setSupportExistingResource',
            'supportAutoDelete' => 'setSupportAutoDelete',
            'regionIds' => 'setRegionIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * settingName  规则的配置名称
    * masterService  主资源
    * masterResourceType  主资源类型
    * associatedService  关联资源
    * associatedResourceType  关联资源类型
    * supportExistingResource  是否规则是对存量资源生效。
    * supportAutoDelete  是否支持关系解除后自动删除标签。
    * regionIds  规则配置支持的区域Id。
    *
    * @var string[]
    */
    protected static $getters = [
            'settingName' => 'getSettingName',
            'masterService' => 'getMasterService',
            'masterResourceType' => 'getMasterResourceType',
            'associatedService' => 'getAssociatedService',
            'associatedResourceType' => 'getAssociatedResourceType',
            'supportExistingResource' => 'getSupportExistingResource',
            'supportAutoDelete' => 'getSupportAutoDelete',
            'regionIds' => 'getRegionIds'
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
        $this->container['settingName'] = isset($data['settingName']) ? $data['settingName'] : null;
        $this->container['masterService'] = isset($data['masterService']) ? $data['masterService'] : null;
        $this->container['masterResourceType'] = isset($data['masterResourceType']) ? $data['masterResourceType'] : null;
        $this->container['associatedService'] = isset($data['associatedService']) ? $data['associatedService'] : null;
        $this->container['associatedResourceType'] = isset($data['associatedResourceType']) ? $data['associatedResourceType'] : null;
        $this->container['supportExistingResource'] = isset($data['supportExistingResource']) ? $data['supportExistingResource'] : null;
        $this->container['supportAutoDelete'] = isset($data['supportAutoDelete']) ? $data['supportAutoDelete'] : null;
        $this->container['regionIds'] = isset($data['regionIds']) ? $data['regionIds'] : null;
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
    * Gets settingName
    *  规则的配置名称
    *
    * @return string|null
    */
    public function getSettingName()
    {
        return $this->container['settingName'];
    }

    /**
    * Sets settingName
    *
    * @param string|null $settingName 规则的配置名称
    *
    * @return $this
    */
    public function setSettingName($settingName)
    {
        $this->container['settingName'] = $settingName;
        return $this;
    }

    /**
    * Gets masterService
    *  主资源
    *
    * @return string|null
    */
    public function getMasterService()
    {
        return $this->container['masterService'];
    }

    /**
    * Sets masterService
    *
    * @param string|null $masterService 主资源
    *
    * @return $this
    */
    public function setMasterService($masterService)
    {
        $this->container['masterService'] = $masterService;
        return $this;
    }

    /**
    * Gets masterResourceType
    *  主资源类型
    *
    * @return string|null
    */
    public function getMasterResourceType()
    {
        return $this->container['masterResourceType'];
    }

    /**
    * Sets masterResourceType
    *
    * @param string|null $masterResourceType 主资源类型
    *
    * @return $this
    */
    public function setMasterResourceType($masterResourceType)
    {
        $this->container['masterResourceType'] = $masterResourceType;
        return $this;
    }

    /**
    * Gets associatedService
    *  关联资源
    *
    * @return string|null
    */
    public function getAssociatedService()
    {
        return $this->container['associatedService'];
    }

    /**
    * Sets associatedService
    *
    * @param string|null $associatedService 关联资源
    *
    * @return $this
    */
    public function setAssociatedService($associatedService)
    {
        $this->container['associatedService'] = $associatedService;
        return $this;
    }

    /**
    * Gets associatedResourceType
    *  关联资源类型
    *
    * @return string|null
    */
    public function getAssociatedResourceType()
    {
        return $this->container['associatedResourceType'];
    }

    /**
    * Sets associatedResourceType
    *
    * @param string|null $associatedResourceType 关联资源类型
    *
    * @return $this
    */
    public function setAssociatedResourceType($associatedResourceType)
    {
        $this->container['associatedResourceType'] = $associatedResourceType;
        return $this;
    }

    /**
    * Gets supportExistingResource
    *  是否规则是对存量资源生效。
    *
    * @return bool|null
    */
    public function getSupportExistingResource()
    {
        return $this->container['supportExistingResource'];
    }

    /**
    * Sets supportExistingResource
    *
    * @param bool|null $supportExistingResource 是否规则是对存量资源生效。
    *
    * @return $this
    */
    public function setSupportExistingResource($supportExistingResource)
    {
        $this->container['supportExistingResource'] = $supportExistingResource;
        return $this;
    }

    /**
    * Gets supportAutoDelete
    *  是否支持关系解除后自动删除标签。
    *
    * @return bool|null
    */
    public function getSupportAutoDelete()
    {
        return $this->container['supportAutoDelete'];
    }

    /**
    * Sets supportAutoDelete
    *
    * @param bool|null $supportAutoDelete 是否支持关系解除后自动删除标签。
    *
    * @return $this
    */
    public function setSupportAutoDelete($supportAutoDelete)
    {
        $this->container['supportAutoDelete'] = $supportAutoDelete;
        return $this;
    }

    /**
    * Gets regionIds
    *  规则配置支持的区域Id。
    *
    * @return string[]|null
    */
    public function getRegionIds()
    {
        return $this->container['regionIds'];
    }

    /**
    * Sets regionIds
    *
    * @param string[]|null $regionIds 规则配置支持的区域Id。
    *
    * @return $this
    */
    public function setRegionIds($regionIds)
    {
        $this->container['regionIds'] = $regionIds;
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

