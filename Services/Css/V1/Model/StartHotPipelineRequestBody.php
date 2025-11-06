<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartHotPipelineRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartHotPipelineRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  配置文件名称。
    * keepAlive  热启动操作时，需要与集群已存在管道的 “是否保持常驻”值保持一致。 - true: 开启保持常驻。 - false: 关闭保持常驻。 开启“保持常驻”适用于需要长期运行的业务。开启“保持常驻”以后，将会在每个节点上面配置一个守护进程，当logstash服务出现故障的时候，会主动拉起并修复。“保持常驻”不适用于短期运行的业务，因为多次主动拉起logstash服务会导致数据迁移重复。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'keepAlive' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  配置文件名称。
    * keepAlive  热启动操作时，需要与集群已存在管道的 “是否保持常驻”值保持一致。 - true: 开启保持常驻。 - false: 关闭保持常驻。 开启“保持常驻”适用于需要长期运行的业务。开启“保持常驻”以后，将会在每个节点上面配置一个守护进程，当logstash服务出现故障的时候，会主动拉起并修复。“保持常驻”不适用于短期运行的业务，因为多次主动拉起logstash服务会导致数据迁移重复。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'keepAlive' => null
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
    * name  配置文件名称。
    * keepAlive  热启动操作时，需要与集群已存在管道的 “是否保持常驻”值保持一致。 - true: 开启保持常驻。 - false: 关闭保持常驻。 开启“保持常驻”适用于需要长期运行的业务。开启“保持常驻”以后，将会在每个节点上面配置一个守护进程，当logstash服务出现故障的时候，会主动拉起并修复。“保持常驻”不适用于短期运行的业务，因为多次主动拉起logstash服务会导致数据迁移重复。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'keepAlive' => 'keep_alive'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  配置文件名称。
    * keepAlive  热启动操作时，需要与集群已存在管道的 “是否保持常驻”值保持一致。 - true: 开启保持常驻。 - false: 关闭保持常驻。 开启“保持常驻”适用于需要长期运行的业务。开启“保持常驻”以后，将会在每个节点上面配置一个守护进程，当logstash服务出现故障的时候，会主动拉起并修复。“保持常驻”不适用于短期运行的业务，因为多次主动拉起logstash服务会导致数据迁移重复。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'keepAlive' => 'setKeepAlive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  配置文件名称。
    * keepAlive  热启动操作时，需要与集群已存在管道的 “是否保持常驻”值保持一致。 - true: 开启保持常驻。 - false: 关闭保持常驻。 开启“保持常驻”适用于需要长期运行的业务。开启“保持常驻”以后，将会在每个节点上面配置一个守护进程，当logstash服务出现故障的时候，会主动拉起并修复。“保持常驻”不适用于短期运行的业务，因为多次主动拉起logstash服务会导致数据迁移重复。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'keepAlive' => 'getKeepAlive'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['keepAlive'] = isset($data['keepAlive']) ? $data['keepAlive'] : null;
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
    *  配置文件名称。
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
    * @param string $name 配置文件名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets keepAlive
    *  热启动操作时，需要与集群已存在管道的 “是否保持常驻”值保持一致。 - true: 开启保持常驻。 - false: 关闭保持常驻。 开启“保持常驻”适用于需要长期运行的业务。开启“保持常驻”以后，将会在每个节点上面配置一个守护进程，当logstash服务出现故障的时候，会主动拉起并修复。“保持常驻”不适用于短期运行的业务，因为多次主动拉起logstash服务会导致数据迁移重复。
    *
    * @return bool|null
    */
    public function getKeepAlive()
    {
        return $this->container['keepAlive'];
    }

    /**
    * Sets keepAlive
    *
    * @param bool|null $keepAlive 热启动操作时，需要与集群已存在管道的 “是否保持常驻”值保持一致。 - true: 开启保持常驻。 - false: 关闭保持常驻。 开启“保持常驻”适用于需要长期运行的业务。开启“保持常驻”以后，将会在每个节点上面配置一个守护进程，当logstash服务出现故障的时候，会主动拉起并修复。“保持常驻”不适用于短期运行的业务，因为多次主动拉起logstash服务会导致数据迁移重复。
    *
    * @return $this
    */
    public function setKeepAlive($keepAlive)
    {
        $this->container['keepAlive'] = $keepAlive;
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

