<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释：** 日志服务状态。 **取值范围：** - ON：开启。 - OFF：关闭。 **默认取值：** ON。
    * type  **参数解释：** LTS日志类型。 **约束限制：** 不涉及。 **取值范围：** - STDOUT：容器标准输出 - EVENT：Kubernetes事件 - FILE：容器日志文件 **默认取值：** 不涉及。
    * logGroupId  **参数解释：** 日志组ID，用户选择自己已有的日志组，不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * logStreamId  **参数解释：** 日志流id，用户选择自己已有的日志组。不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * files  **参数解释：** 容器日志文件配置。 **约束限制：** 数量上限为10个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'type' => 'string',
            'logGroupId' => 'string',
            'logStreamId' => 'string',
            'files' => '\HuaweiCloud\SDK\ModelArts\V1\Model\LtsFiles[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释：** 日志服务状态。 **取值范围：** - ON：开启。 - OFF：关闭。 **默认取值：** ON。
    * type  **参数解释：** LTS日志类型。 **约束限制：** 不涉及。 **取值范围：** - STDOUT：容器标准输出 - EVENT：Kubernetes事件 - FILE：容器日志文件 **默认取值：** 不涉及。
    * logGroupId  **参数解释：** 日志组ID，用户选择自己已有的日志组，不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * logStreamId  **参数解释：** 日志流id，用户选择自己已有的日志组。不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * files  **参数解释：** 容器日志文件配置。 **约束限制：** 数量上限为10个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'type' => null,
        'logGroupId' => null,
        'logStreamId' => null,
        'files' => null
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
    * status  **参数解释：** 日志服务状态。 **取值范围：** - ON：开启。 - OFF：关闭。 **默认取值：** ON。
    * type  **参数解释：** LTS日志类型。 **约束限制：** 不涉及。 **取值范围：** - STDOUT：容器标准输出 - EVENT：Kubernetes事件 - FILE：容器日志文件 **默认取值：** 不涉及。
    * logGroupId  **参数解释：** 日志组ID，用户选择自己已有的日志组，不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * logStreamId  **参数解释：** 日志流id，用户选择自己已有的日志组。不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * files  **参数解释：** 容器日志文件配置。 **约束限制：** 数量上限为10个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'type' => 'type',
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id',
            'files' => 'files'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释：** 日志服务状态。 **取值范围：** - ON：开启。 - OFF：关闭。 **默认取值：** ON。
    * type  **参数解释：** LTS日志类型。 **约束限制：** 不涉及。 **取值范围：** - STDOUT：容器标准输出 - EVENT：Kubernetes事件 - FILE：容器日志文件 **默认取值：** 不涉及。
    * logGroupId  **参数解释：** 日志组ID，用户选择自己已有的日志组，不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * logStreamId  **参数解释：** 日志流id，用户选择自己已有的日志组。不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * files  **参数解释：** 容器日志文件配置。 **约束限制：** 数量上限为10个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'type' => 'setType',
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId',
            'files' => 'setFiles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释：** 日志服务状态。 **取值范围：** - ON：开启。 - OFF：关闭。 **默认取值：** ON。
    * type  **参数解释：** LTS日志类型。 **约束限制：** 不涉及。 **取值范围：** - STDOUT：容器标准输出 - EVENT：Kubernetes事件 - FILE：容器日志文件 **默认取值：** 不涉及。
    * logGroupId  **参数解释：** 日志组ID，用户选择自己已有的日志组，不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * logStreamId  **参数解释：** 日志流id，用户选择自己已有的日志组。不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * files  **参数解释：** 容器日志文件配置。 **约束限制：** 数量上限为10个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'type' => 'getType',
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId',
            'files' => 'getFiles'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets status
    *  **参数解释：** 日志服务状态。 **取值范围：** - ON：开启。 - OFF：关闭。 **默认取值：** ON。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释：** 日志服务状态。 **取值范围：** - ON：开启。 - OFF：关闭。 **默认取值：** ON。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** LTS日志类型。 **约束限制：** 不涉及。 **取值范围：** - STDOUT：容器标准输出 - EVENT：Kubernetes事件 - FILE：容器日志文件 **默认取值：** 不涉及。
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
    * @param string $type **参数解释：** LTS日志类型。 **约束限制：** 不涉及。 **取值范围：** - STDOUT：容器标准输出 - EVENT：Kubernetes事件 - FILE：容器日志文件 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets logGroupId
    *  **参数解释：** 日志组ID，用户选择自己已有的日志组，不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId **参数解释：** 日志组ID，用户选择自己已有的日志组，不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logStreamId
    *  **参数解释：** 日志流id，用户选择自己已有的日志组。不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId **参数解释：** 日志流id，用户选择自己已有的日志组。不填时，会自动创建。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets files
    *  **参数解释：** 容器日志文件配置。 **约束限制：** 数量上限为10个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\LtsFiles[]|null
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\LtsFiles[]|null $files **参数解释：** 容器日志文件配置。 **约束限制：** 数量上限为10个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
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

