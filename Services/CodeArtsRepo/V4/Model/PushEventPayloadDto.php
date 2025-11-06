<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PushEventPayloadDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PushEventPayloadDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commitCount  **参数解释：** 提交数量。
    * action  **参数解释：** 操作类型。
    * refType  **参数解释：** ref类型。
    * commitFrom  **参数解释：** 源Commit。
    * commitTo  **参数解释：** 目标Commit。
    * ref  **参数解释：** 分支。
    * commitTitle  **参数解释：** 提交标题。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commitCount' => 'int',
            'action' => 'string',
            'refType' => 'string',
            'commitFrom' => 'string',
            'commitTo' => 'string',
            'ref' => 'string',
            'commitTitle' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commitCount  **参数解释：** 提交数量。
    * action  **参数解释：** 操作类型。
    * refType  **参数解释：** ref类型。
    * commitFrom  **参数解释：** 源Commit。
    * commitTo  **参数解释：** 目标Commit。
    * ref  **参数解释：** 分支。
    * commitTitle  **参数解释：** 提交标题。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commitCount' => 'int32',
        'action' => null,
        'refType' => null,
        'commitFrom' => null,
        'commitTo' => null,
        'ref' => null,
        'commitTitle' => null
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
    * commitCount  **参数解释：** 提交数量。
    * action  **参数解释：** 操作类型。
    * refType  **参数解释：** ref类型。
    * commitFrom  **参数解释：** 源Commit。
    * commitTo  **参数解释：** 目标Commit。
    * ref  **参数解释：** 分支。
    * commitTitle  **参数解释：** 提交标题。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commitCount' => 'commit_count',
            'action' => 'action',
            'refType' => 'ref_type',
            'commitFrom' => 'commit_from',
            'commitTo' => 'commit_to',
            'ref' => 'ref',
            'commitTitle' => 'commit_title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commitCount  **参数解释：** 提交数量。
    * action  **参数解释：** 操作类型。
    * refType  **参数解释：** ref类型。
    * commitFrom  **参数解释：** 源Commit。
    * commitTo  **参数解释：** 目标Commit。
    * ref  **参数解释：** 分支。
    * commitTitle  **参数解释：** 提交标题。
    *
    * @var string[]
    */
    protected static $setters = [
            'commitCount' => 'setCommitCount',
            'action' => 'setAction',
            'refType' => 'setRefType',
            'commitFrom' => 'setCommitFrom',
            'commitTo' => 'setCommitTo',
            'ref' => 'setRef',
            'commitTitle' => 'setCommitTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commitCount  **参数解释：** 提交数量。
    * action  **参数解释：** 操作类型。
    * refType  **参数解释：** ref类型。
    * commitFrom  **参数解释：** 源Commit。
    * commitTo  **参数解释：** 目标Commit。
    * ref  **参数解释：** 分支。
    * commitTitle  **参数解释：** 提交标题。
    *
    * @var string[]
    */
    protected static $getters = [
            'commitCount' => 'getCommitCount',
            'action' => 'getAction',
            'refType' => 'getRefType',
            'commitFrom' => 'getCommitFrom',
            'commitTo' => 'getCommitTo',
            'ref' => 'getRef',
            'commitTitle' => 'getCommitTitle'
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
        $this->container['commitCount'] = isset($data['commitCount']) ? $data['commitCount'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['refType'] = isset($data['refType']) ? $data['refType'] : null;
        $this->container['commitFrom'] = isset($data['commitFrom']) ? $data['commitFrom'] : null;
        $this->container['commitTo'] = isset($data['commitTo']) ? $data['commitTo'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['commitTitle'] = isset($data['commitTitle']) ? $data['commitTitle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['commitCount']) && ($this->container['commitCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'commitCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['commitCount']) && ($this->container['commitCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'commitCount', must be bigger than or equal to 1.";
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
    * Gets commitCount
    *  **参数解释：** 提交数量。
    *
    * @return int|null
    */
    public function getCommitCount()
    {
        return $this->container['commitCount'];
    }

    /**
    * Sets commitCount
    *
    * @param int|null $commitCount **参数解释：** 提交数量。
    *
    * @return $this
    */
    public function setCommitCount($commitCount)
    {
        $this->container['commitCount'] = $commitCount;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释：** 操作类型。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释：** 操作类型。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets refType
    *  **参数解释：** ref类型。
    *
    * @return string|null
    */
    public function getRefType()
    {
        return $this->container['refType'];
    }

    /**
    * Sets refType
    *
    * @param string|null $refType **参数解释：** ref类型。
    *
    * @return $this
    */
    public function setRefType($refType)
    {
        $this->container['refType'] = $refType;
        return $this;
    }

    /**
    * Gets commitFrom
    *  **参数解释：** 源Commit。
    *
    * @return string|null
    */
    public function getCommitFrom()
    {
        return $this->container['commitFrom'];
    }

    /**
    * Sets commitFrom
    *
    * @param string|null $commitFrom **参数解释：** 源Commit。
    *
    * @return $this
    */
    public function setCommitFrom($commitFrom)
    {
        $this->container['commitFrom'] = $commitFrom;
        return $this;
    }

    /**
    * Gets commitTo
    *  **参数解释：** 目标Commit。
    *
    * @return string|null
    */
    public function getCommitTo()
    {
        return $this->container['commitTo'];
    }

    /**
    * Sets commitTo
    *
    * @param string|null $commitTo **参数解释：** 目标Commit。
    *
    * @return $this
    */
    public function setCommitTo($commitTo)
    {
        $this->container['commitTo'] = $commitTo;
        return $this;
    }

    /**
    * Gets ref
    *  **参数解释：** 分支。
    *
    * @return string|null
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param string|null $ref **参数解释：** 分支。
    *
    * @return $this
    */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;
        return $this;
    }

    /**
    * Gets commitTitle
    *  **参数解释：** 提交标题。
    *
    * @return string|null
    */
    public function getCommitTitle()
    {
        return $this->container['commitTitle'];
    }

    /**
    * Sets commitTitle
    *
    * @param string|null $commitTitle **参数解释：** 提交标题。
    *
    * @return $this
    */
    public function setCommitTitle($commitTitle)
    {
        $this->container['commitTitle'] = $commitTitle;
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

