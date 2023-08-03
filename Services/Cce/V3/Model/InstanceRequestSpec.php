<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceRequestSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceRequestSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  待安装、升级插件的版本号，例如1.0.0 - 安装：该参数非必传，如果不传，匹配集群支持的最新版本 - 升级：该参数必传，需指定版本号
    * clusterId  集群id
    * values  插件模板安装参数（各插件不同），升级插件时需要填写全量安装参数，未填写参数将使用插件模板中的默认值，当前插件安装参数可通过查询插件实例接口获取。
    * addonTemplateName  待安装插件模板名称，如coredns
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'clusterId' => 'string',
            'values' => 'map[string,object]',
            'addonTemplateName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  待安装、升级插件的版本号，例如1.0.0 - 安装：该参数非必传，如果不传，匹配集群支持的最新版本 - 升级：该参数必传，需指定版本号
    * clusterId  集群id
    * values  插件模板安装参数（各插件不同），升级插件时需要填写全量安装参数，未填写参数将使用插件模板中的默认值，当前插件安装参数可通过查询插件实例接口获取。
    * addonTemplateName  待安装插件模板名称，如coredns
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'clusterId' => null,
        'values' => null,
        'addonTemplateName' => null
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
    * version  待安装、升级插件的版本号，例如1.0.0 - 安装：该参数非必传，如果不传，匹配集群支持的最新版本 - 升级：该参数必传，需指定版本号
    * clusterId  集群id
    * values  插件模板安装参数（各插件不同），升级插件时需要填写全量安装参数，未填写参数将使用插件模板中的默认值，当前插件安装参数可通过查询插件实例接口获取。
    * addonTemplateName  待安装插件模板名称，如coredns
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'clusterId' => 'clusterID',
            'values' => 'values',
            'addonTemplateName' => 'addonTemplateName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  待安装、升级插件的版本号，例如1.0.0 - 安装：该参数非必传，如果不传，匹配集群支持的最新版本 - 升级：该参数必传，需指定版本号
    * clusterId  集群id
    * values  插件模板安装参数（各插件不同），升级插件时需要填写全量安装参数，未填写参数将使用插件模板中的默认值，当前插件安装参数可通过查询插件实例接口获取。
    * addonTemplateName  待安装插件模板名称，如coredns
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'clusterId' => 'setClusterId',
            'values' => 'setValues',
            'addonTemplateName' => 'setAddonTemplateName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  待安装、升级插件的版本号，例如1.0.0 - 安装：该参数非必传，如果不传，匹配集群支持的最新版本 - 升级：该参数必传，需指定版本号
    * clusterId  集群id
    * values  插件模板安装参数（各插件不同），升级插件时需要填写全量安装参数，未填写参数将使用插件模板中的默认值，当前插件安装参数可通过查询插件实例接口获取。
    * addonTemplateName  待安装插件模板名称，如coredns
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'clusterId' => 'getClusterId',
            'values' => 'getValues',
            'addonTemplateName' => 'getAddonTemplateName'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['addonTemplateName'] = isset($data['addonTemplateName']) ? $data['addonTemplateName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
        }
        if ($this->container['addonTemplateName'] === null) {
            $invalidProperties[] = "'addonTemplateName' can't be null";
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
    * Gets version
    *  待安装、升级插件的版本号，例如1.0.0 - 安装：该参数非必传，如果不传，匹配集群支持的最新版本 - 升级：该参数必传，需指定版本号
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 待安装、升级插件的版本号，例如1.0.0 - 安装：该参数非必传，如果不传，匹配集群支持的最新版本 - 升级：该参数必传，需指定版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets values
    *  插件模板安装参数（各插件不同），升级插件时需要填写全量安装参数，未填写参数将使用插件模板中的默认值，当前插件安装参数可通过查询插件实例接口获取。
    *
    * @return map[string,object]
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param map[string,object] $values 插件模板安装参数（各插件不同），升级插件时需要填写全量安装参数，未填写参数将使用插件模板中的默认值，当前插件安装参数可通过查询插件实例接口获取。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets addonTemplateName
    *  待安装插件模板名称，如coredns
    *
    * @return string
    */
    public function getAddonTemplateName()
    {
        return $this->container['addonTemplateName'];
    }

    /**
    * Sets addonTemplateName
    *
    * @param string $addonTemplateName 待安装插件模板名称，如coredns
    *
    * @return $this
    */
    public function setAddonTemplateName($addonTemplateName)
    {
        $this->container['addonTemplateName'] = $addonTemplateName;
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

