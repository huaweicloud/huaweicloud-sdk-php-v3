<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDocumentRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDocumentRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  作业名称
    * content  作业内容，DSL语句，最大长度64KB
    * enterpriseProjectId  企业项目id
    * riskLevel  风险等级。 - LOW：低。 - MEDIUM：中。 - HIGH：高。
    * description  描述
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'content' => 'string',
            'enterpriseProjectId' => 'string',
            'riskLevel' => 'string',
            'description' => 'string',
            'tags' => '\HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentRequestBodyTags[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  作业名称
    * content  作业内容，DSL语句，最大长度64KB
    * enterpriseProjectId  企业项目id
    * riskLevel  风险等级。 - LOW：低。 - MEDIUM：中。 - HIGH：高。
    * description  描述
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'content' => null,
        'enterpriseProjectId' => null,
        'riskLevel' => null,
        'description' => null,
        'tags' => null
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
    * name  作业名称
    * content  作业内容，DSL语句，最大长度64KB
    * enterpriseProjectId  企业项目id
    * riskLevel  风险等级。 - LOW：低。 - MEDIUM：中。 - HIGH：高。
    * description  描述
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'content' => 'content',
            'enterpriseProjectId' => 'enterprise_project_id',
            'riskLevel' => 'risk_level',
            'description' => 'description',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  作业名称
    * content  作业内容，DSL语句，最大长度64KB
    * enterpriseProjectId  企业项目id
    * riskLevel  风险等级。 - LOW：低。 - MEDIUM：中。 - HIGH：高。
    * description  描述
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'content' => 'setContent',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'riskLevel' => 'setRiskLevel',
            'description' => 'setDescription',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  作业名称
    * content  作业内容，DSL语句，最大长度64KB
    * enterpriseProjectId  企业项目id
    * riskLevel  风险等级。 - LOW：低。 - MEDIUM：中。 - HIGH：高。
    * description  描述
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'content' => 'getContent',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'riskLevel' => 'getRiskLevel',
            'description' => 'getDescription',
            'tags' => 'getTags'
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
    const RISK_LEVEL_LOW = 'LOW';
    const RISK_LEVEL_MEDIUM = 'MEDIUM';
    const RISK_LEVEL_HIGH = 'HIGH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRiskLevelAllowableValues()
    {
        return [
            self::RISK_LEVEL_LOW,
            self::RISK_LEVEL_MEDIUM,
            self::RISK_LEVEL_HIGH,
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 65536)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 65536.";
            }
            if ((mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['riskLevel'] === null) {
            $invalidProperties[] = "'riskLevel' can't be null";
        }
            $allowedValues = $this->getRiskLevelAllowableValues();
                if (!is_null($this->container['riskLevel']) && !in_array($this->container['riskLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'riskLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  作业名称
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
    * @param string $name 作业名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets content
    *  作业内容，DSL语句，最大长度64KB
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 作业内容，DSL语句，最大长度64KB
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险等级。 - LOW：低。 - MEDIUM：中。 - HIGH：高。
    *
    * @return string
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string $riskLevel 风险等级。 - LOW：低。 - MEDIUM：中。 - HIGH：高。
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
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
    *  标签列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentRequestBodyTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CreateDocumentRequestBodyTags[]|null $tags 标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

