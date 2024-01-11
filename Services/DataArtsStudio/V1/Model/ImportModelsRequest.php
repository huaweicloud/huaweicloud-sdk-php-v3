<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportModelsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportModelsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * actionId  需要执行的动作，根据导入的对象不同而选择不同的导入动作
    * modelId  模型id，在导入模型（import_relation）时必填
    * directoryId  导入的目录id，在导入码表（import_datastandard）和数据标准（import_datastandard）时生效，选填
    * skipExist  是否需要覆盖更新已有的实体
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'actionId' => 'string',
            'modelId' => 'string',
            'directoryId' => 'string',
            'skipExist' => 'bool',
            'body' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportModelsRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * actionId  需要执行的动作，根据导入的对象不同而选择不同的导入动作
    * modelId  模型id，在导入模型（import_relation）时必填
    * directoryId  导入的目录id，在导入码表（import_datastandard）和数据标准（import_datastandard）时生效，选填
    * skipExist  是否需要覆盖更新已有的实体
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'actionId' => null,
        'modelId' => null,
        'directoryId' => null,
        'skipExist' => null,
        'body' => null
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
    * workspace  DataArts Studio工作空间ID
    * actionId  需要执行的动作，根据导入的对象不同而选择不同的导入动作
    * modelId  模型id，在导入模型（import_relation）时必填
    * directoryId  导入的目录id，在导入码表（import_datastandard）和数据标准（import_datastandard）时生效，选填
    * skipExist  是否需要覆盖更新已有的实体
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'actionId' => 'action-id',
            'modelId' => 'model_id',
            'directoryId' => 'directory_id',
            'skipExist' => 'skip-exist',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * actionId  需要执行的动作，根据导入的对象不同而选择不同的导入动作
    * modelId  模型id，在导入模型（import_relation）时必填
    * directoryId  导入的目录id，在导入码表（import_datastandard）和数据标准（import_datastandard）时生效，选填
    * skipExist  是否需要覆盖更新已有的实体
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'actionId' => 'setActionId',
            'modelId' => 'setModelId',
            'directoryId' => 'setDirectoryId',
            'skipExist' => 'setSkipExist',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * actionId  需要执行的动作，根据导入的对象不同而选择不同的导入动作
    * modelId  模型id，在导入模型（import_relation）时必填
    * directoryId  导入的目录id，在导入码表（import_datastandard）和数据标准（import_datastandard）时生效，选填
    * skipExist  是否需要覆盖更新已有的实体
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'actionId' => 'getActionId',
            'modelId' => 'getModelId',
            'directoryId' => 'getDirectoryId',
            'skipExist' => 'getSkipExist',
            'body' => 'getBody'
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
    const ACTION_ID_IMPORT_RELATION = 'import_relation';
    const ACTION_ID_IMPORT_DIMENSION = 'import_dimension';
    const ACTION_ID_IMPORT_CODETABLE = 'import_codetable';
    const ACTION_ID_IMPORT_DATASTANDARD = 'import_datastandard';
    const ACTION_ID_IMPORT_BIZMETRIC = 'import_bizmetric';
    const ACTION_ID_IMPORT_BIZCATALOG = 'import_bizcatalog';
    const ACTION_ID_IMPORT_ATOMIC = 'import_atomic';
    const ACTION_ID_IMPORT_DERIVATIVE = 'import_derivative';
    const ACTION_ID_IMPORT_COMPOUND = 'import_compound';
    const ACTION_ID_IMPORT_AGGREGATION = 'import_aggregation';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionIdAllowableValues()
    {
        return [
            self::ACTION_ID_IMPORT_RELATION,
            self::ACTION_ID_IMPORT_DIMENSION,
            self::ACTION_ID_IMPORT_CODETABLE,
            self::ACTION_ID_IMPORT_DATASTANDARD,
            self::ACTION_ID_IMPORT_BIZMETRIC,
            self::ACTION_ID_IMPORT_BIZCATALOG,
            self::ACTION_ID_IMPORT_ATOMIC,
            self::ACTION_ID_IMPORT_DERIVATIVE,
            self::ACTION_ID_IMPORT_COMPOUND,
            self::ACTION_ID_IMPORT_AGGREGATION,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['modelId'] = isset($data['modelId']) ? $data['modelId'] : null;
        $this->container['directoryId'] = isset($data['directoryId']) ? $data['directoryId'] : null;
        $this->container['skipExist'] = isset($data['skipExist']) ? $data['skipExist'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
        if ($this->container['actionId'] === null) {
            $invalidProperties[] = "'actionId' can't be null";
        }
            $allowedValues = $this->getActionIdAllowableValues();
                if (!is_null($this->container['actionId']) && !in_array($this->container['actionId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionId', must be one of '%s'",
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
    * Gets workspace
    *  DataArts Studio工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets actionId
    *  需要执行的动作，根据导入的对象不同而选择不同的导入动作
    *
    * @return string
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string $actionId 需要执行的动作，根据导入的对象不同而选择不同的导入动作
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets modelId
    *  模型id，在导入模型（import_relation）时必填
    *
    * @return string|null
    */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
    * Sets modelId
    *
    * @param string|null $modelId 模型id，在导入模型（import_relation）时必填
    *
    * @return $this
    */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;
        return $this;
    }

    /**
    * Gets directoryId
    *  导入的目录id，在导入码表（import_datastandard）和数据标准（import_datastandard）时生效，选填
    *
    * @return string|null
    */
    public function getDirectoryId()
    {
        return $this->container['directoryId'];
    }

    /**
    * Sets directoryId
    *
    * @param string|null $directoryId 导入的目录id，在导入码表（import_datastandard）和数据标准（import_datastandard）时生效，选填
    *
    * @return $this
    */
    public function setDirectoryId($directoryId)
    {
        $this->container['directoryId'] = $directoryId;
        return $this;
    }

    /**
    * Gets skipExist
    *  是否需要覆盖更新已有的实体
    *
    * @return bool|null
    */
    public function getSkipExist()
    {
        return $this->container['skipExist'];
    }

    /**
    * Sets skipExist
    *
    * @param bool|null $skipExist 是否需要覆盖更新已有的实体
    *
    * @return $this
    */
    public function setSkipExist($skipExist)
    {
        $this->container['skipExist'] = $skipExist;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportModelsRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportModelsRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

