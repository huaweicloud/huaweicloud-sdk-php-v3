<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApigDataSourceView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApigDataSourceView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dwName  数据连接名称
    * dwType  数据连接类型
    * createUser  数据连接创建者
    * createTime  数据连接创建时间，时间戳
    * agentId  代理id
    * agentName  代理名称
    * dwId  数据连接id
    * qualifiedName  数据连接限定名称
    * description  数据连接描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dwName' => 'string',
            'dwType' => 'string',
            'createUser' => 'string',
            'createTime' => 'float',
            'agentId' => 'string',
            'agentName' => 'string',
            'dwId' => 'string',
            'qualifiedName' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dwName  数据连接名称
    * dwType  数据连接类型
    * createUser  数据连接创建者
    * createTime  数据连接创建时间，时间戳
    * agentId  代理id
    * agentName  代理名称
    * dwId  数据连接id
    * qualifiedName  数据连接限定名称
    * description  数据连接描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dwName' => null,
        'dwType' => null,
        'createUser' => null,
        'createTime' => null,
        'agentId' => null,
        'agentName' => null,
        'dwId' => null,
        'qualifiedName' => null,
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
    * createUser  数据连接创建者
    * createTime  数据连接创建时间，时间戳
    * agentId  代理id
    * agentName  代理名称
    * dwId  数据连接id
    * qualifiedName  数据连接限定名称
    * description  数据连接描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dwName' => 'dw_name',
            'dwType' => 'dw_type',
            'createUser' => 'create_user',
            'createTime' => 'create_time',
            'agentId' => 'agent_id',
            'agentName' => 'agent_name',
            'dwId' => 'dw_id',
            'qualifiedName' => 'qualified_name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dwName  数据连接名称
    * dwType  数据连接类型
    * createUser  数据连接创建者
    * createTime  数据连接创建时间，时间戳
    * agentId  代理id
    * agentName  代理名称
    * dwId  数据连接id
    * qualifiedName  数据连接限定名称
    * description  数据连接描述
    *
    * @var string[]
    */
    protected static $setters = [
            'dwName' => 'setDwName',
            'dwType' => 'setDwType',
            'createUser' => 'setCreateUser',
            'createTime' => 'setCreateTime',
            'agentId' => 'setAgentId',
            'agentName' => 'setAgentName',
            'dwId' => 'setDwId',
            'qualifiedName' => 'setQualifiedName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dwName  数据连接名称
    * dwType  数据连接类型
    * createUser  数据连接创建者
    * createTime  数据连接创建时间，时间戳
    * agentId  代理id
    * agentName  代理名称
    * dwId  数据连接id
    * qualifiedName  数据连接限定名称
    * description  数据连接描述
    *
    * @var string[]
    */
    protected static $getters = [
            'dwName' => 'getDwName',
            'dwType' => 'getDwType',
            'createUser' => 'getCreateUser',
            'createTime' => 'getCreateTime',
            'agentId' => 'getAgentId',
            'agentName' => 'getAgentName',
            'dwId' => 'getDwId',
            'qualifiedName' => 'getQualifiedName',
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
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentName'] = isset($data['agentName']) ? $data['agentName'] : null;
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['qualifiedName'] = isset($data['qualifiedName']) ? $data['qualifiedName'] : null;
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
            if (!is_null($this->container['dwName']) && (mb_strlen($this->container['dwName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dwName']) && (mb_strlen($this->container['dwName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dwType']) && (mb_strlen($this->container['dwType']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dwType']) && (mb_strlen($this->container['dwType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) > 128)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentName']) && (mb_strlen($this->container['agentName']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentName']) && (mb_strlen($this->container['agentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['qualifiedName']) && (mb_strlen($this->container['qualifiedName']) > 128)) {
                $invalidProperties[] = "invalid value for 'qualifiedName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['qualifiedName']) && (mb_strlen($this->container['qualifiedName']) < 1)) {
                $invalidProperties[] = "invalid value for 'qualifiedName', the character length must be bigger than or equal to 1.";
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
    * @return string|null
    */
    public function getDwName()
    {
        return $this->container['dwName'];
    }

    /**
    * Sets dwName
    *
    * @param string|null $dwName 数据连接名称
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
    * @return string|null
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string|null $dwType 数据连接类型
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
        return $this;
    }

    /**
    * Gets createUser
    *  数据连接创建者
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 数据连接创建者
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets createTime
    *  数据连接创建时间，时间戳
    *
    * @return float|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param float|null $createTime 数据连接创建时间，时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets agentId
    *  代理id
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
    * @param string|null $agentId 代理id
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
    *  代理名称
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
    * @param string|null $agentName 代理名称
    *
    * @return $this
    */
    public function setAgentName($agentName)
    {
        $this->container['agentName'] = $agentName;
        return $this;
    }

    /**
    * Gets dwId
    *  数据连接id
    *
    * @return string|null
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string|null $dwId 数据连接id
    *
    * @return $this
    */
    public function setDwId($dwId)
    {
        $this->container['dwId'] = $dwId;
        return $this;
    }

    /**
    * Gets qualifiedName
    *  数据连接限定名称
    *
    * @return string|null
    */
    public function getQualifiedName()
    {
        return $this->container['qualifiedName'];
    }

    /**
    * Sets qualifiedName
    *
    * @param string|null $qualifiedName 数据连接限定名称
    *
    * @return $this
    */
    public function setQualifiedName($qualifiedName)
    {
        $this->container['qualifiedName'] = $qualifiedName;
        return $this;
    }

    /**
    * Gets description
    *  数据连接描述
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
    * @param string|null $description 数据连接描述
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

