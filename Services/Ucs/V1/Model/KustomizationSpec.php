<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KustomizationSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KustomizationSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  kustomization.yaml文件的路径
    * interval  用于指定控制器执行 Kustomization同步与校验的时间间隔
    * timeout  用于定义验证、应用和健康检查操作的超时
    * sourceRef  sourceRef
    * targetNamespace  用于设置或覆盖kustomization.yaml文件中的命名空间
    * prune  是否启用垃圾回收功能
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'interval' => 'string',
            'timeout' => 'string',
            'sourceRef' => '\HuaweiCloud\SDK\Ucs\V1\Model\SourceRef',
            'targetNamespace' => 'string',
            'prune' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  kustomization.yaml文件的路径
    * interval  用于指定控制器执行 Kustomization同步与校验的时间间隔
    * timeout  用于定义验证、应用和健康检查操作的超时
    * sourceRef  sourceRef
    * targetNamespace  用于设置或覆盖kustomization.yaml文件中的命名空间
    * prune  是否启用垃圾回收功能
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'interval' => null,
        'timeout' => null,
        'sourceRef' => null,
        'targetNamespace' => null,
        'prune' => null
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
    * path  kustomization.yaml文件的路径
    * interval  用于指定控制器执行 Kustomization同步与校验的时间间隔
    * timeout  用于定义验证、应用和健康检查操作的超时
    * sourceRef  sourceRef
    * targetNamespace  用于设置或覆盖kustomization.yaml文件中的命名空间
    * prune  是否启用垃圾回收功能
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'interval' => 'interval',
            'timeout' => 'timeout',
            'sourceRef' => 'sourceRef',
            'targetNamespace' => 'targetNamespace',
            'prune' => 'prune'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  kustomization.yaml文件的路径
    * interval  用于指定控制器执行 Kustomization同步与校验的时间间隔
    * timeout  用于定义验证、应用和健康检查操作的超时
    * sourceRef  sourceRef
    * targetNamespace  用于设置或覆盖kustomization.yaml文件中的命名空间
    * prune  是否启用垃圾回收功能
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'interval' => 'setInterval',
            'timeout' => 'setTimeout',
            'sourceRef' => 'setSourceRef',
            'targetNamespace' => 'setTargetNamespace',
            'prune' => 'setPrune'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  kustomization.yaml文件的路径
    * interval  用于指定控制器执行 Kustomization同步与校验的时间间隔
    * timeout  用于定义验证、应用和健康检查操作的超时
    * sourceRef  sourceRef
    * targetNamespace  用于设置或覆盖kustomization.yaml文件中的命名空间
    * prune  是否启用垃圾回收功能
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'interval' => 'getInterval',
            'timeout' => 'getTimeout',
            'sourceRef' => 'getSourceRef',
            'targetNamespace' => 'getTargetNamespace',
            'prune' => 'getPrune'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['sourceRef'] = isset($data['sourceRef']) ? $data['sourceRef'] : null;
        $this->container['targetNamespace'] = isset($data['targetNamespace']) ? $data['targetNamespace'] : null;
        $this->container['prune'] = isset($data['prune']) ? $data['prune'] : null;
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
    * Gets path
    *  kustomization.yaml文件的路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path kustomization.yaml文件的路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets interval
    *  用于指定控制器执行 Kustomization同步与校验的时间间隔
    *
    * @return string|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param string|null $interval 用于指定控制器执行 Kustomization同步与校验的时间间隔
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets timeout
    *  用于定义验证、应用和健康检查操作的超时
    *
    * @return string|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param string|null $timeout 用于定义验证、应用和健康检查操作的超时
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets sourceRef
    *  sourceRef
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\SourceRef|null
    */
    public function getSourceRef()
    {
        return $this->container['sourceRef'];
    }

    /**
    * Sets sourceRef
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\SourceRef|null $sourceRef sourceRef
    *
    * @return $this
    */
    public function setSourceRef($sourceRef)
    {
        $this->container['sourceRef'] = $sourceRef;
        return $this;
    }

    /**
    * Gets targetNamespace
    *  用于设置或覆盖kustomization.yaml文件中的命名空间
    *
    * @return string|null
    */
    public function getTargetNamespace()
    {
        return $this->container['targetNamespace'];
    }

    /**
    * Sets targetNamespace
    *
    * @param string|null $targetNamespace 用于设置或覆盖kustomization.yaml文件中的命名空间
    *
    * @return $this
    */
    public function setTargetNamespace($targetNamespace)
    {
        $this->container['targetNamespace'] = $targetNamespace;
        return $this;
    }

    /**
    * Gets prune
    *  是否启用垃圾回收功能
    *
    * @return bool|null
    */
    public function getPrune()
    {
        return $this->container['prune'];
    }

    /**
    * Sets prune
    *
    * @param bool|null $prune 是否启用垃圾回收功能
    *
    * @return $this
    */
    public function setPrune($prune)
    {
        $this->container['prune'] = $prune;
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

