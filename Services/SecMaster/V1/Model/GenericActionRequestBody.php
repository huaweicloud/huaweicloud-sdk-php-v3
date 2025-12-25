<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GenericActionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GenericActionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  表示具体行为的类型。命名为“t_行为名称”。例如 \"t_dialog_feedback\" 。
    * workspaceId  workspace ID
    * parameter  具体行为的数据内容，其结构由'action'字段决定。 - 回答质量人工反馈action: t_dialog_feedback, 参考DialogFeedbackData结构
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'workspaceId' => 'string',
            'parameter' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  表示具体行为的类型。命名为“t_行为名称”。例如 \"t_dialog_feedback\" 。
    * workspaceId  workspace ID
    * parameter  具体行为的数据内容，其结构由'action'字段决定。 - 回答质量人工反馈action: t_dialog_feedback, 参考DialogFeedbackData结构
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'workspaceId' => null,
        'parameter' => null
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
    * type  表示具体行为的类型。命名为“t_行为名称”。例如 \"t_dialog_feedback\" 。
    * workspaceId  workspace ID
    * parameter  具体行为的数据内容，其结构由'action'字段决定。 - 回答质量人工反馈action: t_dialog_feedback, 参考DialogFeedbackData结构
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'workspaceId' => 'workspace_id',
            'parameter' => 'parameter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  表示具体行为的类型。命名为“t_行为名称”。例如 \"t_dialog_feedback\" 。
    * workspaceId  workspace ID
    * parameter  具体行为的数据内容，其结构由'action'字段决定。 - 回答质量人工反馈action: t_dialog_feedback, 参考DialogFeedbackData结构
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'workspaceId' => 'setWorkspaceId',
            'parameter' => 'setParameter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  表示具体行为的类型。命名为“t_行为名称”。例如 \"t_dialog_feedback\" 。
    * workspaceId  workspace ID
    * parameter  具体行为的数据内容，其结构由'action'字段决定。 - 回答质量人工反馈action: t_dialog_feedback, 参考DialogFeedbackData结构
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'workspaceId' => 'getWorkspaceId',
            'parameter' => 'getParameter'
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['parameter'] = isset($data['parameter']) ? $data['parameter'] : null;
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
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['parameter'] === null) {
            $invalidProperties[] = "'parameter' can't be null";
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
    *  表示具体行为的类型。命名为“t_行为名称”。例如 \"t_dialog_feedback\" 。
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
    * @param string $type 表示具体行为的类型。命名为“t_行为名称”。例如 \"t_dialog_feedback\" 。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets workspaceId
    *  workspace ID
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
    * @param string|null $workspaceId workspace ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets parameter
    *  具体行为的数据内容，其结构由'action'字段决定。 - 回答质量人工反馈action: t_dialog_feedback, 参考DialogFeedbackData结构
    *
    * @return object
    */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
    * Sets parameter
    *
    * @param object $parameter 具体行为的数据内容，其结构由'action'字段决定。 - 回答质量人工反馈action: t_dialog_feedback, 参考DialogFeedbackData结构
    *
    * @return $this
    */
    public function setParameter($parameter)
    {
        $this->container['parameter'] = $parameter;
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

