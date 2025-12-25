<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePreProcessRulesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePreProcessRulesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  映射id
    * workspaceId  映射id
    * mappingId  映射id
    * preprocessRules  预处理规则列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'workspaceId' => 'string',
            'mappingId' => 'string',
            'preprocessRules' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CreatePreProcessRulesRequestBodyPreprocessRules[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  映射id
    * workspaceId  映射id
    * mappingId  映射id
    * preprocessRules  预处理规则列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'workspaceId' => null,
        'mappingId' => null,
        'preprocessRules' => null
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
    * projectId  映射id
    * workspaceId  映射id
    * mappingId  映射id
    * preprocessRules  预处理规则列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'mappingId' => 'mapping_id',
            'preprocessRules' => 'preprocess_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  映射id
    * workspaceId  映射id
    * mappingId  映射id
    * preprocessRules  预处理规则列表
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'mappingId' => 'setMappingId',
            'preprocessRules' => 'setPreprocessRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  映射id
    * workspaceId  映射id
    * mappingId  映射id
    * preprocessRules  预处理规则列表
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'mappingId' => 'getMappingId',
            'preprocessRules' => 'getPreprocessRules'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['mappingId'] = isset($data['mappingId']) ? $data['mappingId'] : null;
        $this->container['preprocessRules'] = isset($data['preprocessRules']) ? $data['preprocessRules'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['mappingId'] === null) {
            $invalidProperties[] = "'mappingId' can't be null";
        }
            if ((mb_strlen($this->container['mappingId']) > 64)) {
                $invalidProperties[] = "invalid value for 'mappingId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['mappingId']) < 32)) {
                $invalidProperties[] = "invalid value for 'mappingId', the character length must be bigger than or equal to 32.";
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
    * Gets projectId
    *  映射id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 映射id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  映射id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 映射id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets mappingId
    *  映射id
    *
    * @return string
    */
    public function getMappingId()
    {
        return $this->container['mappingId'];
    }

    /**
    * Sets mappingId
    *
    * @param string $mappingId 映射id
    *
    * @return $this
    */
    public function setMappingId($mappingId)
    {
        $this->container['mappingId'] = $mappingId;
        return $this;
    }

    /**
    * Gets preprocessRules
    *  预处理规则列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CreatePreProcessRulesRequestBodyPreprocessRules[]|null
    */
    public function getPreprocessRules()
    {
        return $this->container['preprocessRules'];
    }

    /**
    * Sets preprocessRules
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CreatePreProcessRulesRequestBodyPreprocessRules[]|null $preprocessRules 预处理规则列表
    *
    * @return $this
    */
    public function setPreprocessRules($preprocessRules)
    {
        $this->container['preprocessRules'] = $preprocessRules;
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

