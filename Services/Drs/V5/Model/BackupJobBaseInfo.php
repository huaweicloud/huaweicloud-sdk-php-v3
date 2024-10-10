<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupJobBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupJobBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。   - 最小长度：4     - 最大长度：50
    * engineType  数据库引擎。  - sqlserver：RDS for SQL Server引擎
    * description  任务描述。
    * tags  标签信息。 标签的值可以包含任意语种字母、数字、空格和_ . : / = + - @。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'engineType' => 'string',
            'description' => 'string',
            'tags' => '\HuaweiCloud\SDK\Drs\V5\Model\ResourceTag[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。   - 最小长度：4     - 最大长度：50
    * engineType  数据库引擎。  - sqlserver：RDS for SQL Server引擎
    * description  任务描述。
    * tags  标签信息。 标签的值可以包含任意语种字母、数字、空格和_ . : / = + - @。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'engineType' => null,
        'description' => null,
        'tags' => null,
        'enterpriseProjectId' => null
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
    * name  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。   - 最小长度：4     - 最大长度：50
    * engineType  数据库引擎。  - sqlserver：RDS for SQL Server引擎
    * description  任务描述。
    * tags  标签信息。 标签的值可以包含任意语种字母、数字、空格和_ . : / = + - @。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'engineType' => 'engine_type',
            'description' => 'description',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。   - 最小长度：4     - 最大长度：50
    * engineType  数据库引擎。  - sqlserver：RDS for SQL Server引擎
    * description  任务描述。
    * tags  标签信息。 标签的值可以包含任意语种字母、数字、空格和_ . : / = + - @。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'engineType' => 'setEngineType',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。   - 最小长度：4     - 最大长度：50
    * engineType  数据库引擎。  - sqlserver：RDS for SQL Server引擎
    * description  任务描述。
    * tags  标签信息。 标签的值可以包含任意语种字母、数字、空格和_ . : / = + - @。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'engineType' => 'getEngineType',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const ENGINE_TYPE_SQLSERVER = 'sqlserver';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_SQLSERVER,
        ];
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
            if ((mb_strlen($this->container['name']) < 4)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 4.";
            }
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['engineType']) > 128)) {
                $invalidProperties[] = "invalid value for 'engineType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['engineType']) < 1)) {
                $invalidProperties[] = "invalid value for 'engineType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    *  任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。   - 最小长度：4     - 最大长度：50
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
    * @param string $name 任务名称。 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。   - 最小长度：4     - 最大长度：50
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets engineType
    *  数据库引擎。  - sqlserver：RDS for SQL Server引擎
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 数据库引擎。  - sqlserver：RDS for SQL Server引擎
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets description
    *  任务描述。
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
    * @param string|null $description 任务描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息。 标签的值可以包含任意语种字母、数字、空格和_ . : / = + - @。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ResourceTag[]|null $tags 标签信息。 标签的值可以包含任意语种字母、数字、空格和_ . : / = + - @。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

