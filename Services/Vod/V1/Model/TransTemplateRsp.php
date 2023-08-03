<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransTemplateRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransTemplateRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  模板组id<br/>
    * name  模板组名称<br/>
    * isDefault  是否设置成默认转码模板<br/>
    * type  模板组类型<br/>
    * isAutoEncrypt  是否开启加密
    * qualityInfoList  画质配置信息列表<br/>
    * watermarkTemplateIds  绑定的水印模板组ID数组<br/>
    * description  模板介绍<br/>
    * common  common
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'name' => 'string',
            'isDefault' => 'bool',
            'type' => 'string',
            'isAutoEncrypt' => 'bool',
            'qualityInfoList' => '\HuaweiCloud\SDK\Vod\V1\Model\QualityInfoList[]',
            'watermarkTemplateIds' => 'string[]',
            'description' => 'string',
            'common' => '\HuaweiCloud\SDK\Vod\V1\Model\CommonInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  模板组id<br/>
    * name  模板组名称<br/>
    * isDefault  是否设置成默认转码模板<br/>
    * type  模板组类型<br/>
    * isAutoEncrypt  是否开启加密
    * qualityInfoList  画质配置信息列表<br/>
    * watermarkTemplateIds  绑定的水印模板组ID数组<br/>
    * description  模板介绍<br/>
    * common  common
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'name' => null,
        'isDefault' => null,
        'type' => null,
        'isAutoEncrypt' => null,
        'qualityInfoList' => null,
        'watermarkTemplateIds' => null,
        'description' => null,
        'common' => null
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
    * groupId  模板组id<br/>
    * name  模板组名称<br/>
    * isDefault  是否设置成默认转码模板<br/>
    * type  模板组类型<br/>
    * isAutoEncrypt  是否开启加密
    * qualityInfoList  画质配置信息列表<br/>
    * watermarkTemplateIds  绑定的水印模板组ID数组<br/>
    * description  模板介绍<br/>
    * common  common
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'name' => 'name',
            'isDefault' => 'is_default',
            'type' => 'type',
            'isAutoEncrypt' => 'is_auto_encrypt',
            'qualityInfoList' => 'quality_info_list',
            'watermarkTemplateIds' => 'watermark_template_ids',
            'description' => 'description',
            'common' => 'common'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  模板组id<br/>
    * name  模板组名称<br/>
    * isDefault  是否设置成默认转码模板<br/>
    * type  模板组类型<br/>
    * isAutoEncrypt  是否开启加密
    * qualityInfoList  画质配置信息列表<br/>
    * watermarkTemplateIds  绑定的水印模板组ID数组<br/>
    * description  模板介绍<br/>
    * common  common
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'name' => 'setName',
            'isDefault' => 'setIsDefault',
            'type' => 'setType',
            'isAutoEncrypt' => 'setIsAutoEncrypt',
            'qualityInfoList' => 'setQualityInfoList',
            'watermarkTemplateIds' => 'setWatermarkTemplateIds',
            'description' => 'setDescription',
            'common' => 'setCommon'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  模板组id<br/>
    * name  模板组名称<br/>
    * isDefault  是否设置成默认转码模板<br/>
    * type  模板组类型<br/>
    * isAutoEncrypt  是否开启加密
    * qualityInfoList  画质配置信息列表<br/>
    * watermarkTemplateIds  绑定的水印模板组ID数组<br/>
    * description  模板介绍<br/>
    * common  common
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'name' => 'getName',
            'isDefault' => 'getIsDefault',
            'type' => 'getType',
            'isAutoEncrypt' => 'getIsAutoEncrypt',
            'qualityInfoList' => 'getQualityInfoList',
            'watermarkTemplateIds' => 'getWatermarkTemplateIds',
            'description' => 'getDescription',
            'common' => 'getCommon'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isAutoEncrypt'] = isset($data['isAutoEncrypt']) ? $data['isAutoEncrypt'] : null;
        $this->container['qualityInfoList'] = isset($data['qualityInfoList']) ? $data['qualityInfoList'] : null;
        $this->container['watermarkTemplateIds'] = isset($data['watermarkTemplateIds']) ? $data['watermarkTemplateIds'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['common'] = isset($data['common']) ? $data['common'] : null;
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
    * Gets groupId
    *  模板组id<br/>
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
    * @param string|null $groupId 模板组id<br/>
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets name
    *  模板组名称<br/>
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 模板组名称<br/>
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否设置成默认转码模板<br/>
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault 是否设置成默认转码模板<br/>
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets type
    *  模板组类型<br/>
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 模板组类型<br/>
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets isAutoEncrypt
    *  是否开启加密
    *
    * @return bool|null
    */
    public function getIsAutoEncrypt()
    {
        return $this->container['isAutoEncrypt'];
    }

    /**
    * Sets isAutoEncrypt
    *
    * @param bool|null $isAutoEncrypt 是否开启加密
    *
    * @return $this
    */
    public function setIsAutoEncrypt($isAutoEncrypt)
    {
        $this->container['isAutoEncrypt'] = $isAutoEncrypt;
        return $this;
    }

    /**
    * Gets qualityInfoList
    *  画质配置信息列表<br/>
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\QualityInfoList[]|null
    */
    public function getQualityInfoList()
    {
        return $this->container['qualityInfoList'];
    }

    /**
    * Sets qualityInfoList
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\QualityInfoList[]|null $qualityInfoList 画质配置信息列表<br/>
    *
    * @return $this
    */
    public function setQualityInfoList($qualityInfoList)
    {
        $this->container['qualityInfoList'] = $qualityInfoList;
        return $this;
    }

    /**
    * Gets watermarkTemplateIds
    *  绑定的水印模板组ID数组<br/>
    *
    * @return string[]|null
    */
    public function getWatermarkTemplateIds()
    {
        return $this->container['watermarkTemplateIds'];
    }

    /**
    * Sets watermarkTemplateIds
    *
    * @param string[]|null $watermarkTemplateIds 绑定的水印模板组ID数组<br/>
    *
    * @return $this
    */
    public function setWatermarkTemplateIds($watermarkTemplateIds)
    {
        $this->container['watermarkTemplateIds'] = $watermarkTemplateIds;
        return $this;
    }

    /**
    * Gets description
    *  模板介绍<br/>
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 模板介绍<br/>
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets common
    *  common
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\CommonInfo|null
    */
    public function getCommon()
    {
        return $this->container['common'];
    }

    /**
    * Sets common
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\CommonInfo|null $common common
    *
    * @return $this
    */
    public function setCommon($common)
    {
        $this->container['common'] = $common;
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

