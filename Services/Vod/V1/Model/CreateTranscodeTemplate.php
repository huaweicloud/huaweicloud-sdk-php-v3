<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTranscodeTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTranscodeTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  模板组名称<br/>
    * isDefault  是否设置成默认转码模板<br/>
    * isAutoEncrypt  是否开启加密
    * additionalManifests  自定义索引后缀列表，支持最大设置10个索引后缀。 如果填写索引后缀，则必须指定流名stream_name。
    * qualityInfoList  画质配置信息列表<br/>
    * common  common
    * watermarkTemplateIds  绑定的水印模板组ID数组<br/>
    * description  模板介绍<br/>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'isDefault' => 'bool',
            'isAutoEncrypt' => 'bool',
            'additionalManifests' => '\HuaweiCloud\SDK\Vod\V1\Model\AdditionalManifest[]',
            'qualityInfoList' => '\HuaweiCloud\SDK\Vod\V1\Model\QualityInfoList[]',
            'common' => '\HuaweiCloud\SDK\Vod\V1\Model\CommonInfo',
            'watermarkTemplateIds' => 'string[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  模板组名称<br/>
    * isDefault  是否设置成默认转码模板<br/>
    * isAutoEncrypt  是否开启加密
    * additionalManifests  自定义索引后缀列表，支持最大设置10个索引后缀。 如果填写索引后缀，则必须指定流名stream_name。
    * qualityInfoList  画质配置信息列表<br/>
    * common  common
    * watermarkTemplateIds  绑定的水印模板组ID数组<br/>
    * description  模板介绍<br/>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'isDefault' => null,
        'isAutoEncrypt' => null,
        'additionalManifests' => null,
        'qualityInfoList' => null,
        'common' => null,
        'watermarkTemplateIds' => null,
        'description' => null
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
    * name  模板组名称<br/>
    * isDefault  是否设置成默认转码模板<br/>
    * isAutoEncrypt  是否开启加密
    * additionalManifests  自定义索引后缀列表，支持最大设置10个索引后缀。 如果填写索引后缀，则必须指定流名stream_name。
    * qualityInfoList  画质配置信息列表<br/>
    * common  common
    * watermarkTemplateIds  绑定的水印模板组ID数组<br/>
    * description  模板介绍<br/>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'isDefault' => 'is_default',
            'isAutoEncrypt' => 'is_auto_encrypt',
            'additionalManifests' => 'additional_manifests',
            'qualityInfoList' => 'quality_info_list',
            'common' => 'common',
            'watermarkTemplateIds' => 'watermark_template_ids',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  模板组名称<br/>
    * isDefault  是否设置成默认转码模板<br/>
    * isAutoEncrypt  是否开启加密
    * additionalManifests  自定义索引后缀列表，支持最大设置10个索引后缀。 如果填写索引后缀，则必须指定流名stream_name。
    * qualityInfoList  画质配置信息列表<br/>
    * common  common
    * watermarkTemplateIds  绑定的水印模板组ID数组<br/>
    * description  模板介绍<br/>
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'isDefault' => 'setIsDefault',
            'isAutoEncrypt' => 'setIsAutoEncrypt',
            'additionalManifests' => 'setAdditionalManifests',
            'qualityInfoList' => 'setQualityInfoList',
            'common' => 'setCommon',
            'watermarkTemplateIds' => 'setWatermarkTemplateIds',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  模板组名称<br/>
    * isDefault  是否设置成默认转码模板<br/>
    * isAutoEncrypt  是否开启加密
    * additionalManifests  自定义索引后缀列表，支持最大设置10个索引后缀。 如果填写索引后缀，则必须指定流名stream_name。
    * qualityInfoList  画质配置信息列表<br/>
    * common  common
    * watermarkTemplateIds  绑定的水印模板组ID数组<br/>
    * description  模板介绍<br/>
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'isDefault' => 'getIsDefault',
            'isAutoEncrypt' => 'getIsAutoEncrypt',
            'additionalManifests' => 'getAdditionalManifests',
            'qualityInfoList' => 'getQualityInfoList',
            'common' => 'getCommon',
            'watermarkTemplateIds' => 'getWatermarkTemplateIds',
            'description' => 'getDescription'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['isAutoEncrypt'] = isset($data['isAutoEncrypt']) ? $data['isAutoEncrypt'] : null;
        $this->container['additionalManifests'] = isset($data['additionalManifests']) ? $data['additionalManifests'] : null;
        $this->container['qualityInfoList'] = isset($data['qualityInfoList']) ? $data['qualityInfoList'] : null;
        $this->container['common'] = isset($data['common']) ? $data['common'] : null;
        $this->container['watermarkTemplateIds'] = isset($data['watermarkTemplateIds']) ? $data['watermarkTemplateIds'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['qualityInfoList'] === null) {
            $invalidProperties[] = "'qualityInfoList' can't be null";
        }
        if ($this->container['common'] === null) {
            $invalidProperties[] = "'common' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
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
    * Gets name
    *  模板组名称<br/>
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 模板组名称<br/>
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
    * Gets additionalManifests
    *  自定义索引后缀列表，支持最大设置10个索引后缀。 如果填写索引后缀，则必须指定流名stream_name。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\AdditionalManifest[]|null
    */
    public function getAdditionalManifests()
    {
        return $this->container['additionalManifests'];
    }

    /**
    * Sets additionalManifests
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\AdditionalManifest[]|null $additionalManifests 自定义索引后缀列表，支持最大设置10个索引后缀。 如果填写索引后缀，则必须指定流名stream_name。
    *
    * @return $this
    */
    public function setAdditionalManifests($additionalManifests)
    {
        $this->container['additionalManifests'] = $additionalManifests;
        return $this;
    }

    /**
    * Gets qualityInfoList
    *  画质配置信息列表<br/>
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\QualityInfoList[]
    */
    public function getQualityInfoList()
    {
        return $this->container['qualityInfoList'];
    }

    /**
    * Sets qualityInfoList
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\QualityInfoList[] $qualityInfoList 画质配置信息列表<br/>
    *
    * @return $this
    */
    public function setQualityInfoList($qualityInfoList)
    {
        $this->container['qualityInfoList'] = $qualityInfoList;
        return $this;
    }

    /**
    * Gets common
    *  common
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\CommonInfo
    */
    public function getCommon()
    {
        return $this->container['common'];
    }

    /**
    * Sets common
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\CommonInfo $common common
    *
    * @return $this
    */
    public function setCommon($common)
    {
        $this->container['common'] = $common;
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

