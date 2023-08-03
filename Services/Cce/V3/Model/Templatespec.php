<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Templatespec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Templatespec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  模板类型（helm，static）
    * require  是否为必安装插件
    * labels  模板所属分组
    * logoUrl  Logo图片地址
    * readmeUrl  插件详情描述及使用说明
    * description  模板描述
    * versions  模板具体版本详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'require' => 'bool',
            'labels' => 'string[]',
            'logoUrl' => 'string',
            'readmeUrl' => 'string',
            'description' => 'string',
            'versions' => '\HuaweiCloud\SDK\Cce\V3\Model\Versions[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  模板类型（helm，static）
    * require  是否为必安装插件
    * labels  模板所属分组
    * logoUrl  Logo图片地址
    * readmeUrl  插件详情描述及使用说明
    * description  模板描述
    * versions  模板具体版本详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'require' => null,
        'labels' => null,
        'logoUrl' => null,
        'readmeUrl' => null,
        'description' => null,
        'versions' => null
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
    * type  模板类型（helm，static）
    * require  是否为必安装插件
    * labels  模板所属分组
    * logoUrl  Logo图片地址
    * readmeUrl  插件详情描述及使用说明
    * description  模板描述
    * versions  模板具体版本详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'require' => 'require',
            'labels' => 'labels',
            'logoUrl' => 'logoURL',
            'readmeUrl' => 'readmeURL',
            'description' => 'description',
            'versions' => 'versions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  模板类型（helm，static）
    * require  是否为必安装插件
    * labels  模板所属分组
    * logoUrl  Logo图片地址
    * readmeUrl  插件详情描述及使用说明
    * description  模板描述
    * versions  模板具体版本详情
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'require' => 'setRequire',
            'labels' => 'setLabels',
            'logoUrl' => 'setLogoUrl',
            'readmeUrl' => 'setReadmeUrl',
            'description' => 'setDescription',
            'versions' => 'setVersions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  模板类型（helm，static）
    * require  是否为必安装插件
    * labels  模板所属分组
    * logoUrl  Logo图片地址
    * readmeUrl  插件详情描述及使用说明
    * description  模板描述
    * versions  模板具体版本详情
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'require' => 'getRequire',
            'labels' => 'getLabels',
            'logoUrl' => 'getLogoUrl',
            'readmeUrl' => 'getReadmeUrl',
            'description' => 'getDescription',
            'versions' => 'getVersions'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['require'] = isset($data['require']) ? $data['require'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['logoUrl'] = isset($data['logoUrl']) ? $data['logoUrl'] : null;
        $this->container['readmeUrl'] = isset($data['readmeUrl']) ? $data['readmeUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['logoUrl'] === null) {
            $invalidProperties[] = "'logoUrl' can't be null";
        }
        if ($this->container['readmeUrl'] === null) {
            $invalidProperties[] = "'readmeUrl' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['versions'] === null) {
            $invalidProperties[] = "'versions' can't be null";
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
    * Gets type
    *  模板类型（helm，static）
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 模板类型（helm，static）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets require
    *  是否为必安装插件
    *
    * @return bool|null
    */
    public function getRequire()
    {
        return $this->container['require'];
    }

    /**
    * Sets require
    *
    * @param bool|null $require 是否为必安装插件
    *
    * @return $this
    */
    public function setRequire($require)
    {
        $this->container['require'] = $require;
        return $this;
    }

    /**
    * Gets labels
    *  模板所属分组
    *
    * @return string[]
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string[] $labels 模板所属分组
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets logoUrl
    *  Logo图片地址
    *
    * @return string
    */
    public function getLogoUrl()
    {
        return $this->container['logoUrl'];
    }

    /**
    * Sets logoUrl
    *
    * @param string $logoUrl Logo图片地址
    *
    * @return $this
    */
    public function setLogoUrl($logoUrl)
    {
        $this->container['logoUrl'] = $logoUrl;
        return $this;
    }

    /**
    * Gets readmeUrl
    *  插件详情描述及使用说明
    *
    * @return string
    */
    public function getReadmeUrl()
    {
        return $this->container['readmeUrl'];
    }

    /**
    * Sets readmeUrl
    *
    * @param string $readmeUrl 插件详情描述及使用说明
    *
    * @return $this
    */
    public function setReadmeUrl($readmeUrl)
    {
        $this->container['readmeUrl'] = $readmeUrl;
        return $this;
    }

    /**
    * Gets description
    *  模板描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets versions
    *  模板具体版本详情
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Versions[]
    */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
    * Sets versions
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Versions[] $versions 模板具体版本详情
    *
    * @return $this
    */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;
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

