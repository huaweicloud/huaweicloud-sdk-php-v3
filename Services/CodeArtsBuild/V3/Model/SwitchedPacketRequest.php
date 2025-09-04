<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchedPacketRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchedPacketRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * sourceGroupId  源分组编号
    * targetGroupId  目标分组编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'sourceGroupId' => 'string',
            'targetGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * sourceGroupId  源分组编号
    * targetGroupId  目标分组编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'sourceGroupId' => null,
        'targetGroupId' => null
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
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * sourceGroupId  源分组编号
    * targetGroupId  目标分组编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'sourceGroupId' => 'source_group_id',
            'targetGroupId' => 'target_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * sourceGroupId  源分组编号
    * targetGroupId  目标分组编号
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'sourceGroupId' => 'setSourceGroupId',
            'targetGroupId' => 'setTargetGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * sourceGroupId  源分组编号
    * targetGroupId  目标分组编号
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'sourceGroupId' => 'getSourceGroupId',
            'targetGroupId' => 'getTargetGroupId'
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
        $this->container['sourceGroupId'] = isset($data['sourceGroupId']) ? $data['sourceGroupId'] : null;
        $this->container['targetGroupId'] = isset($data['targetGroupId']) ? $data['targetGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['sourceGroupId'] === null) {
            $invalidProperties[] = "'sourceGroupId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['sourceGroupId'])) {
                $invalidProperties[] = "invalid value for 'sourceGroupId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['targetGroupId'] === null) {
            $invalidProperties[] = "'targetGroupId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['targetGroupId'])) {
                $invalidProperties[] = "invalid value for 'targetGroupId', must be conform to the pattern /^[0-9a-z]{32}$/.";
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
    *  CodeArts项目ID，32位数字、小写字母组合。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId CodeArts项目ID，32位数字、小写字母组合。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets sourceGroupId
    *  源分组编号
    *
    * @return string
    */
    public function getSourceGroupId()
    {
        return $this->container['sourceGroupId'];
    }

    /**
    * Sets sourceGroupId
    *
    * @param string $sourceGroupId 源分组编号
    *
    * @return $this
    */
    public function setSourceGroupId($sourceGroupId)
    {
        $this->container['sourceGroupId'] = $sourceGroupId;
        return $this;
    }

    /**
    * Gets targetGroupId
    *  目标分组编号
    *
    * @return string
    */
    public function getTargetGroupId()
    {
        return $this->container['targetGroupId'];
    }

    /**
    * Sets targetGroupId
    *
    * @param string $targetGroupId 目标分组编号
    *
    * @return $this
    */
    public function setTargetGroupId($targetGroupId)
    {
        $this->container['targetGroupId'] = $targetGroupId;
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

