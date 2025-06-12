<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AMQPUserPerm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AMQPUserPerm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vhost  需要配置权限的Vhost名称，一个用户可以配置多个Vhost下的资源权限。
    * conf  使用正则表达式匹配资源配置权限。例如，在输入框内输入“^janeway-.*”，则表示授权给该用户当前Vhost下，所有名称以“janeway-”开头的资源的配置权限。
    * write  使用正则表达式匹配资源写权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的写权限。
    * read  使用正则表达式匹配资源读权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的读权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vhost' => 'string',
            'conf' => 'string',
            'write' => 'string',
            'read' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vhost  需要配置权限的Vhost名称，一个用户可以配置多个Vhost下的资源权限。
    * conf  使用正则表达式匹配资源配置权限。例如，在输入框内输入“^janeway-.*”，则表示授权给该用户当前Vhost下，所有名称以“janeway-”开头的资源的配置权限。
    * write  使用正则表达式匹配资源写权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的写权限。
    * read  使用正则表达式匹配资源读权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的读权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vhost' => null,
        'conf' => null,
        'write' => null,
        'read' => null
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
    * vhost  需要配置权限的Vhost名称，一个用户可以配置多个Vhost下的资源权限。
    * conf  使用正则表达式匹配资源配置权限。例如，在输入框内输入“^janeway-.*”，则表示授权给该用户当前Vhost下，所有名称以“janeway-”开头的资源的配置权限。
    * write  使用正则表达式匹配资源写权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的写权限。
    * read  使用正则表达式匹配资源读权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的读权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vhost' => 'vhost',
            'conf' => 'conf',
            'write' => 'write',
            'read' => 'read'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vhost  需要配置权限的Vhost名称，一个用户可以配置多个Vhost下的资源权限。
    * conf  使用正则表达式匹配资源配置权限。例如，在输入框内输入“^janeway-.*”，则表示授权给该用户当前Vhost下，所有名称以“janeway-”开头的资源的配置权限。
    * write  使用正则表达式匹配资源写权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的写权限。
    * read  使用正则表达式匹配资源读权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的读权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'vhost' => 'setVhost',
            'conf' => 'setConf',
            'write' => 'setWrite',
            'read' => 'setRead'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vhost  需要配置权限的Vhost名称，一个用户可以配置多个Vhost下的资源权限。
    * conf  使用正则表达式匹配资源配置权限。例如，在输入框内输入“^janeway-.*”，则表示授权给该用户当前Vhost下，所有名称以“janeway-”开头的资源的配置权限。
    * write  使用正则表达式匹配资源写权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的写权限。
    * read  使用正则表达式匹配资源读权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的读权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'vhost' => 'getVhost',
            'conf' => 'getConf',
            'write' => 'getWrite',
            'read' => 'getRead'
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
        $this->container['vhost'] = isset($data['vhost']) ? $data['vhost'] : null;
        $this->container['conf'] = isset($data['conf']) ? $data['conf'] : null;
        $this->container['write'] = isset($data['write']) ? $data['write'] : null;
        $this->container['read'] = isset($data['read']) ? $data['read'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vhost'] === null) {
            $invalidProperties[] = "'vhost' can't be null";
        }
        if ($this->container['conf'] === null) {
            $invalidProperties[] = "'conf' can't be null";
        }
        if ($this->container['write'] === null) {
            $invalidProperties[] = "'write' can't be null";
        }
        if ($this->container['read'] === null) {
            $invalidProperties[] = "'read' can't be null";
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
    * Gets vhost
    *  需要配置权限的Vhost名称，一个用户可以配置多个Vhost下的资源权限。
    *
    * @return string
    */
    public function getVhost()
    {
        return $this->container['vhost'];
    }

    /**
    * Sets vhost
    *
    * @param string $vhost 需要配置权限的Vhost名称，一个用户可以配置多个Vhost下的资源权限。
    *
    * @return $this
    */
    public function setVhost($vhost)
    {
        $this->container['vhost'] = $vhost;
        return $this;
    }

    /**
    * Gets conf
    *  使用正则表达式匹配资源配置权限。例如，在输入框内输入“^janeway-.*”，则表示授权给该用户当前Vhost下，所有名称以“janeway-”开头的资源的配置权限。
    *
    * @return string
    */
    public function getConf()
    {
        return $this->container['conf'];
    }

    /**
    * Sets conf
    *
    * @param string $conf 使用正则表达式匹配资源配置权限。例如，在输入框内输入“^janeway-.*”，则表示授权给该用户当前Vhost下，所有名称以“janeway-”开头的资源的配置权限。
    *
    * @return $this
    */
    public function setConf($conf)
    {
        $this->container['conf'] = $conf;
        return $this;
    }

    /**
    * Gets write
    *  使用正则表达式匹配资源写权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的写权限。
    *
    * @return string
    */
    public function getWrite()
    {
        return $this->container['write'];
    }

    /**
    * Sets write
    *
    * @param string $write 使用正则表达式匹配资源写权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的写权限。
    *
    * @return $this
    */
    public function setWrite($write)
    {
        $this->container['write'] = $write;
        return $this;
    }

    /**
    * Gets read
    *  使用正则表达式匹配资源读权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的读权限。
    *
    * @return string
    */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
    * Sets read
    *
    * @param string $read 使用正则表达式匹配资源读权限。例如，在输入框内输入“.*”，则表示授权给该用户当前Vhost下，所有资源的读权限。
    *
    * @return $this
    */
    public function setRead($read)
    {
        $this->container['read'] = $read;
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

