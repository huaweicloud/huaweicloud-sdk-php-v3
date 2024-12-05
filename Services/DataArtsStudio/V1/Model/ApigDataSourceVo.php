<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApigDataSourceVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApigDataSourceVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dwName  数据连接名称
    * dwType  数据连接类型
    * dwConfig  连接动态变化配置项，每种连接略有区别，建议在界面进行调试
    * agentId  代理id（若使用代理连接则必填）
    * agentName  代理名称id（若使用代理连接则必填）
    * envType  0：开发模式 1：生产模式。默认为0
    * supportService  1：cdm 2：数据架构 4:数据开发 8：数据质量 16：数据目录 32：数据安全 64：数据服务
    * dwCategory  标签信息
    * description  连接描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dwName' => 'string',
            'dwType' => 'string',
            'dwConfig' => 'object',
            'agentId' => 'string',
            'agentName' => 'string',
            'envType' => 'int',
            'supportService' => 'int',
            'dwCategory' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dwName  数据连接名称
    * dwType  数据连接类型
    * dwConfig  连接动态变化配置项，每种连接略有区别，建议在界面进行调试
    * agentId  代理id（若使用代理连接则必填）
    * agentName  代理名称id（若使用代理连接则必填）
    * envType  0：开发模式 1：生产模式。默认为0
    * supportService  1：cdm 2：数据架构 4:数据开发 8：数据质量 16：数据目录 32：数据安全 64：数据服务
    * dwCategory  标签信息
    * description  连接描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dwName' => null,
        'dwType' => null,
        'dwConfig' => null,
        'agentId' => null,
        'agentName' => null,
        'envType' => null,
        'supportService' => null,
        'dwCategory' => null,
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
    * dwName  数据连接名称
    * dwType  数据连接类型
    * dwConfig  连接动态变化配置项，每种连接略有区别，建议在界面进行调试
    * agentId  代理id（若使用代理连接则必填）
    * agentName  代理名称id（若使用代理连接则必填）
    * envType  0：开发模式 1：生产模式。默认为0
    * supportService  1：cdm 2：数据架构 4:数据开发 8：数据质量 16：数据目录 32：数据安全 64：数据服务
    * dwCategory  标签信息
    * description  连接描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dwName' => 'dw_name',
            'dwType' => 'dw_type',
            'dwConfig' => 'dw_config',
            'agentId' => 'agent_id',
            'agentName' => 'agent_name',
            'envType' => 'env_type',
            'supportService' => 'supportService',
            'dwCategory' => 'dw_category',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dwName  数据连接名称
    * dwType  数据连接类型
    * dwConfig  连接动态变化配置项，每种连接略有区别，建议在界面进行调试
    * agentId  代理id（若使用代理连接则必填）
    * agentName  代理名称id（若使用代理连接则必填）
    * envType  0：开发模式 1：生产模式。默认为0
    * supportService  1：cdm 2：数据架构 4:数据开发 8：数据质量 16：数据目录 32：数据安全 64：数据服务
    * dwCategory  标签信息
    * description  连接描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'dwName' => 'setDwName',
            'dwType' => 'setDwType',
            'dwConfig' => 'setDwConfig',
            'agentId' => 'setAgentId',
            'agentName' => 'setAgentName',
            'envType' => 'setEnvType',
            'supportService' => 'setSupportService',
            'dwCategory' => 'setDwCategory',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dwName  数据连接名称
    * dwType  数据连接类型
    * dwConfig  连接动态变化配置项，每种连接略有区别，建议在界面进行调试
    * agentId  代理id（若使用代理连接则必填）
    * agentName  代理名称id（若使用代理连接则必填）
    * envType  0：开发模式 1：生产模式。默认为0
    * supportService  1：cdm 2：数据架构 4:数据开发 8：数据质量 16：数据目录 32：数据安全 64：数据服务
    * dwCategory  标签信息
    * description  连接描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'dwName' => 'getDwName',
            'dwType' => 'getDwType',
            'dwConfig' => 'getDwConfig',
            'agentId' => 'getAgentId',
            'agentName' => 'getAgentName',
            'envType' => 'getEnvType',
            'supportService' => 'getSupportService',
            'dwCategory' => 'getDwCategory',
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
        $this->container['dwName'] = isset($data['dwName']) ? $data['dwName'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['dwConfig'] = isset($data['dwConfig']) ? $data['dwConfig'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentName'] = isset($data['agentName']) ? $data['agentName'] : null;
        $this->container['envType'] = isset($data['envType']) ? $data['envType'] : null;
        $this->container['supportService'] = isset($data['supportService']) ? $data['supportService'] : null;
        $this->container['dwCategory'] = isset($data['dwCategory']) ? $data['dwCategory'] : null;
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
        if ($this->container['dwName'] === null) {
            $invalidProperties[] = "'dwName' can't be null";
        }
            if ((mb_strlen($this->container['dwName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['dwName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['dwType'] === null) {
            $invalidProperties[] = "'dwType' can't be null";
        }
            if ((mb_strlen($this->container['dwType']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['dwType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['dwConfig'] === null) {
            $invalidProperties[] = "'dwConfig' can't be null";
        }
            if (!is_null($this->container['agentId']) && !preg_match("/^[a-z0-9\\-]{36}$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^[a-z0-9\\-]{36}$/.";
            }
            if (!is_null($this->container['agentName']) && (mb_strlen($this->container['agentName']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentName']) && (mb_strlen($this->container['agentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['envType']) && ($this->container['envType'] > 1)) {
                $invalidProperties[] = "invalid value for 'envType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['envType']) && ($this->container['envType'] < 0)) {
                $invalidProperties[] = "invalid value for 'envType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['supportService']) && ($this->container['supportService'] > 127)) {
                $invalidProperties[] = "invalid value for 'supportService', must be smaller than or equal to 127.";
            }
            if (!is_null($this->container['supportService']) && ($this->container['supportService'] < 1)) {
                $invalidProperties[] = "invalid value for 'supportService', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dwCategory']) && (mb_strlen($this->container['dwCategory']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwCategory', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dwCategory']) && (mb_strlen($this->container['dwCategory']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwCategory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
    * Gets dwName
    *  数据连接名称
    *
    * @return string
    */
    public function getDwName()
    {
        return $this->container['dwName'];
    }

    /**
    * Sets dwName
    *
    * @param string $dwName 数据连接名称
    *
    * @return $this
    */
    public function setDwName($dwName)
    {
        $this->container['dwName'] = $dwName;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型
    *
    * @return string
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string $dwType 数据连接类型
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
        return $this;
    }

    /**
    * Gets dwConfig
    *  连接动态变化配置项，每种连接略有区别，建议在界面进行调试
    *
    * @return object
    */
    public function getDwConfig()
    {
        return $this->container['dwConfig'];
    }

    /**
    * Sets dwConfig
    *
    * @param object $dwConfig 连接动态变化配置项，每种连接略有区别，建议在界面进行调试
    *
    * @return $this
    */
    public function setDwConfig($dwConfig)
    {
        $this->container['dwConfig'] = $dwConfig;
        return $this;
    }

    /**
    * Gets agentId
    *  代理id（若使用代理连接则必填）
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId 代理id（若使用代理连接则必填）
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets agentName
    *  代理名称id（若使用代理连接则必填）
    *
    * @return string|null
    */
    public function getAgentName()
    {
        return $this->container['agentName'];
    }

    /**
    * Sets agentName
    *
    * @param string|null $agentName 代理名称id（若使用代理连接则必填）
    *
    * @return $this
    */
    public function setAgentName($agentName)
    {
        $this->container['agentName'] = $agentName;
        return $this;
    }

    /**
    * Gets envType
    *  0：开发模式 1：生产模式。默认为0
    *
    * @return int|null
    */
    public function getEnvType()
    {
        return $this->container['envType'];
    }

    /**
    * Sets envType
    *
    * @param int|null $envType 0：开发模式 1：生产模式。默认为0
    *
    * @return $this
    */
    public function setEnvType($envType)
    {
        $this->container['envType'] = $envType;
        return $this;
    }

    /**
    * Gets supportService
    *  1：cdm 2：数据架构 4:数据开发 8：数据质量 16：数据目录 32：数据安全 64：数据服务
    *
    * @return int|null
    */
    public function getSupportService()
    {
        return $this->container['supportService'];
    }

    /**
    * Sets supportService
    *
    * @param int|null $supportService 1：cdm 2：数据架构 4:数据开发 8：数据质量 16：数据目录 32：数据安全 64：数据服务
    *
    * @return $this
    */
    public function setSupportService($supportService)
    {
        $this->container['supportService'] = $supportService;
        return $this;
    }

    /**
    * Gets dwCategory
    *  标签信息
    *
    * @return string|null
    */
    public function getDwCategory()
    {
        return $this->container['dwCategory'];
    }

    /**
    * Sets dwCategory
    *
    * @param string|null $dwCategory 标签信息
    *
    * @return $this
    */
    public function setDwCategory($dwCategory)
    {
        $this->container['dwCategory'] = $dwCategory;
        return $this;
    }

    /**
    * Gets description
    *  连接描述信息
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
    * @param string|null $description 连接描述信息
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

