<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  容器的唯一名称
    * state  当前容器状态
    * lastState  上次终止时的状态
    * ready  容器是否通过就绪检查
    * restartCount  容器重启次数
    * image  容器运行的镜像名称
    * imageId  容器运行的镜像ID
    * started  容器是否已经成功启动并进入稳定运行阶段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'state' => 'object',
            'lastState' => 'string',
            'ready' => 'bool',
            'restartCount' => 'int',
            'image' => 'string',
            'imageId' => 'string',
            'started' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  容器的唯一名称
    * state  当前容器状态
    * lastState  上次终止时的状态
    * ready  容器是否通过就绪检查
    * restartCount  容器重启次数
    * image  容器运行的镜像名称
    * imageId  容器运行的镜像ID
    * started  容器是否已经成功启动并进入稳定运行阶段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'state' => null,
        'lastState' => null,
        'ready' => null,
        'restartCount' => 'int32',
        'image' => null,
        'imageId' => null,
        'started' => null
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
    * name  容器的唯一名称
    * state  当前容器状态
    * lastState  上次终止时的状态
    * ready  容器是否通过就绪检查
    * restartCount  容器重启次数
    * image  容器运行的镜像名称
    * imageId  容器运行的镜像ID
    * started  容器是否已经成功启动并进入稳定运行阶段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'state' => 'state',
            'lastState' => 'lastState',
            'ready' => 'ready',
            'restartCount' => 'restartCount',
            'image' => 'image',
            'imageId' => 'imageID',
            'started' => 'started'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  容器的唯一名称
    * state  当前容器状态
    * lastState  上次终止时的状态
    * ready  容器是否通过就绪检查
    * restartCount  容器重启次数
    * image  容器运行的镜像名称
    * imageId  容器运行的镜像ID
    * started  容器是否已经成功启动并进入稳定运行阶段
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'state' => 'setState',
            'lastState' => 'setLastState',
            'ready' => 'setReady',
            'restartCount' => 'setRestartCount',
            'image' => 'setImage',
            'imageId' => 'setImageId',
            'started' => 'setStarted'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  容器的唯一名称
    * state  当前容器状态
    * lastState  上次终止时的状态
    * ready  容器是否通过就绪检查
    * restartCount  容器重启次数
    * image  容器运行的镜像名称
    * imageId  容器运行的镜像ID
    * started  容器是否已经成功启动并进入稳定运行阶段
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'state' => 'getState',
            'lastState' => 'getLastState',
            'ready' => 'getReady',
            'restartCount' => 'getRestartCount',
            'image' => 'getImage',
            'imageId' => 'getImageId',
            'started' => 'getStarted'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['lastState'] = isset($data['lastState']) ? $data['lastState'] : null;
        $this->container['ready'] = isset($data['ready']) ? $data['ready'] : null;
        $this->container['restartCount'] = isset($data['restartCount']) ? $data['restartCount'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  容器的唯一名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 容器的唯一名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets state
    *  当前容器状态
    *
    * @return object|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param object|null $state 当前容器状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets lastState
    *  上次终止时的状态
    *
    * @return string|null
    */
    public function getLastState()
    {
        return $this->container['lastState'];
    }

    /**
    * Sets lastState
    *
    * @param string|null $lastState 上次终止时的状态
    *
    * @return $this
    */
    public function setLastState($lastState)
    {
        $this->container['lastState'] = $lastState;
        return $this;
    }

    /**
    * Gets ready
    *  容器是否通过就绪检查
    *
    * @return bool|null
    */
    public function getReady()
    {
        return $this->container['ready'];
    }

    /**
    * Sets ready
    *
    * @param bool|null $ready 容器是否通过就绪检查
    *
    * @return $this
    */
    public function setReady($ready)
    {
        $this->container['ready'] = $ready;
        return $this;
    }

    /**
    * Gets restartCount
    *  容器重启次数
    *
    * @return int|null
    */
    public function getRestartCount()
    {
        return $this->container['restartCount'];
    }

    /**
    * Sets restartCount
    *
    * @param int|null $restartCount 容器重启次数
    *
    * @return $this
    */
    public function setRestartCount($restartCount)
    {
        $this->container['restartCount'] = $restartCount;
        return $this;
    }

    /**
    * Gets image
    *  容器运行的镜像名称
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 容器运行的镜像名称
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets imageId
    *  容器运行的镜像ID
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 容器运行的镜像ID
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets started
    *  容器是否已经成功启动并进入稳定运行阶段
    *
    * @return string|null
    */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
    * Sets started
    *
    * @param string|null $started 容器是否已经成功启动并进入稳定运行阶段
    *
    * @return $this
    */
    public function setStarted($started)
    {
        $this->container['started'] = $started;
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

