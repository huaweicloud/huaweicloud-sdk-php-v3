<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDcDsReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDcDsReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dsId  采集数据源id，节点下唯一
    * config  数据源的连接及采集信息
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * moduleId  模块id
    * tplId  模板id，节点下唯一
    * qualityReport  质量上报开关，不携带或值不为true，默认为false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dsId' => 'string',
            'config' => 'object',
            'name' => 'string',
            'moduleId' => 'string',
            'tplId' => 'string',
            'qualityReport' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dsId  采集数据源id，节点下唯一
    * config  数据源的连接及采集信息
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * moduleId  模块id
    * tplId  模板id，节点下唯一
    * qualityReport  质量上报开关，不携带或值不为true，默认为false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dsId' => null,
        'config' => null,
        'name' => null,
        'moduleId' => null,
        'tplId' => null,
        'qualityReport' => null
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
    * dsId  采集数据源id，节点下唯一
    * config  数据源的连接及采集信息
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * moduleId  模块id
    * tplId  模板id，节点下唯一
    * qualityReport  质量上报开关，不携带或值不为true，默认为false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dsId' => 'ds_id',
            'config' => 'config',
            'name' => 'name',
            'moduleId' => 'module_id',
            'tplId' => 'tpl_id',
            'qualityReport' => 'quality_report'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dsId  采集数据源id，节点下唯一
    * config  数据源的连接及采集信息
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * moduleId  模块id
    * tplId  模板id，节点下唯一
    * qualityReport  质量上报开关，不携带或值不为true，默认为false
    *
    * @var string[]
    */
    protected static $setters = [
            'dsId' => 'setDsId',
            'config' => 'setConfig',
            'name' => 'setName',
            'moduleId' => 'setModuleId',
            'tplId' => 'setTplId',
            'qualityReport' => 'setQualityReport'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dsId  采集数据源id，节点下唯一
    * config  数据源的连接及采集信息
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * moduleId  模块id
    * tplId  模板id，节点下唯一
    * qualityReport  质量上报开关，不携带或值不为true，默认为false
    *
    * @var string[]
    */
    protected static $getters = [
            'dsId' => 'getDsId',
            'config' => 'getConfig',
            'name' => 'getName',
            'moduleId' => 'getModuleId',
            'tplId' => 'getTplId',
            'qualityReport' => 'getQualityReport'
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
        $this->container['dsId'] = isset($data['dsId']) ? $data['dsId'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['tplId'] = isset($data['tplId']) ? $data['tplId'] : null;
        $this->container['qualityReport'] = isset($data['qualityReport']) ? $data['qualityReport'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dsId'] === null) {
            $invalidProperties[] = "'dsId' can't be null";
        }
            if ((mb_strlen($this->container['dsId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dsId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['dsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dsId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['dsId'])) {
                $invalidProperties[] = "invalid value for 'dsId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['moduleId'] === null) {
            $invalidProperties[] = "'moduleId' can't be null";
        }
            if ((mb_strlen($this->container['moduleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['moduleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['moduleId'])) {
                $invalidProperties[] = "invalid value for 'moduleId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
        if ($this->container['tplId'] === null) {
            $invalidProperties[] = "'tplId' can't be null";
        }
            if ((mb_strlen($this->container['tplId']) > 64)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['tplId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['tplId'])) {
                $invalidProperties[] = "invalid value for 'tplId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
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
    * Gets dsId
    *  采集数据源id，节点下唯一
    *
    * @return string
    */
    public function getDsId()
    {
        return $this->container['dsId'];
    }

    /**
    * Sets dsId
    *
    * @param string $dsId 采集数据源id，节点下唯一
    *
    * @return $this
    */
    public function setDsId($dsId)
    {
        $this->container['dsId'] = $dsId;
        return $this;
    }

    /**
    * Gets config
    *  数据源的连接及采集信息
    *
    * @return object
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param object $config 数据源的连接及采集信息
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets name
    *  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
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
    * @param string $name 采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块id
    *
    * @return string
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string $moduleId 模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets tplId
    *  模板id，节点下唯一
    *
    * @return string
    */
    public function getTplId()
    {
        return $this->container['tplId'];
    }

    /**
    * Sets tplId
    *
    * @param string $tplId 模板id，节点下唯一
    *
    * @return $this
    */
    public function setTplId($tplId)
    {
        $this->container['tplId'] = $tplId;
        return $this;
    }

    /**
    * Gets qualityReport
    *  质量上报开关，不携带或值不为true，默认为false
    *
    * @return bool|null
    */
    public function getQualityReport()
    {
        return $this->container['qualityReport'];
    }

    /**
    * Sets qualityReport
    *
    * @param bool|null $qualityReport 质量上报开关，不携带或值不为true，默认为false
    *
    * @return $this
    */
    public function setQualityReport($qualityReport)
    {
        $this->container['qualityReport'] = $qualityReport;
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

