<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatusEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatusEvent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * firstTimestamp  拦截事件首次发生时间
    * resourceKind  拦截事件资源类型
    * resourceName  拦截事件资源名称
    * resourceNamespace  拦截事件资源命名空间，如果没有则为空
    * message  拦截事件详细信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'firstTimestamp' => 'string',
            'resourceKind' => 'string',
            'resourceName' => 'string',
            'resourceNamespace' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * firstTimestamp  拦截事件首次发生时间
    * resourceKind  拦截事件资源类型
    * resourceName  拦截事件资源名称
    * resourceNamespace  拦截事件资源命名空间，如果没有则为空
    * message  拦截事件详细信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'firstTimestamp' => null,
        'resourceKind' => null,
        'resourceName' => null,
        'resourceNamespace' => null,
        'message' => null
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
    * firstTimestamp  拦截事件首次发生时间
    * resourceKind  拦截事件资源类型
    * resourceName  拦截事件资源名称
    * resourceNamespace  拦截事件资源命名空间，如果没有则为空
    * message  拦截事件详细信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'firstTimestamp' => 'firstTimestamp',
            'resourceKind' => 'resourceKind',
            'resourceName' => 'resourceName',
            'resourceNamespace' => 'resourceNamespace',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * firstTimestamp  拦截事件首次发生时间
    * resourceKind  拦截事件资源类型
    * resourceName  拦截事件资源名称
    * resourceNamespace  拦截事件资源命名空间，如果没有则为空
    * message  拦截事件详细信息
    *
    * @var string[]
    */
    protected static $setters = [
            'firstTimestamp' => 'setFirstTimestamp',
            'resourceKind' => 'setResourceKind',
            'resourceName' => 'setResourceName',
            'resourceNamespace' => 'setResourceNamespace',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * firstTimestamp  拦截事件首次发生时间
    * resourceKind  拦截事件资源类型
    * resourceName  拦截事件资源名称
    * resourceNamespace  拦截事件资源命名空间，如果没有则为空
    * message  拦截事件详细信息
    *
    * @var string[]
    */
    protected static $getters = [
            'firstTimestamp' => 'getFirstTimestamp',
            'resourceKind' => 'getResourceKind',
            'resourceName' => 'getResourceName',
            'resourceNamespace' => 'getResourceNamespace',
            'message' => 'getMessage'
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
        $this->container['firstTimestamp'] = isset($data['firstTimestamp']) ? $data['firstTimestamp'] : null;
        $this->container['resourceKind'] = isset($data['resourceKind']) ? $data['resourceKind'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceNamespace'] = isset($data['resourceNamespace']) ? $data['resourceNamespace'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
    * Gets firstTimestamp
    *  拦截事件首次发生时间
    *
    * @return string|null
    */
    public function getFirstTimestamp()
    {
        return $this->container['firstTimestamp'];
    }

    /**
    * Sets firstTimestamp
    *
    * @param string|null $firstTimestamp 拦截事件首次发生时间
    *
    * @return $this
    */
    public function setFirstTimestamp($firstTimestamp)
    {
        $this->container['firstTimestamp'] = $firstTimestamp;
        return $this;
    }

    /**
    * Gets resourceKind
    *  拦截事件资源类型
    *
    * @return string|null
    */
    public function getResourceKind()
    {
        return $this->container['resourceKind'];
    }

    /**
    * Sets resourceKind
    *
    * @param string|null $resourceKind 拦截事件资源类型
    *
    * @return $this
    */
    public function setResourceKind($resourceKind)
    {
        $this->container['resourceKind'] = $resourceKind;
        return $this;
    }

    /**
    * Gets resourceName
    *  拦截事件资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 拦截事件资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceNamespace
    *  拦截事件资源命名空间，如果没有则为空
    *
    * @return string|null
    */
    public function getResourceNamespace()
    {
        return $this->container['resourceNamespace'];
    }

    /**
    * Sets resourceNamespace
    *
    * @param string|null $resourceNamespace 拦截事件资源命名空间，如果没有则为空
    *
    * @return $this
    */
    public function setResourceNamespace($resourceNamespace)
    {
        $this->container['resourceNamespace'] = $resourceNamespace;
        return $this;
    }

    /**
    * Gets message
    *  拦截事件详细信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 拦截事件详细信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

