<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceName  测试类型名称，用于界面显示，不能使用当前保留名，长度小于等于16位字符
    * serverHost  server_host是由用户提供的域名。 我们会通过此域名进行接口调用，请以https/http开头,长度小于等于128位字符。 TestHub将会通过此域名下的接口，保证服务数据与用户系统数据的一致性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceName' => 'string',
            'serverHost' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceName  测试类型名称，用于界面显示，不能使用当前保留名，长度小于等于16位字符
    * serverHost  server_host是由用户提供的域名。 我们会通过此域名进行接口调用，请以https/http开头,长度小于等于128位字符。 TestHub将会通过此域名下的接口，保证服务数据与用户系统数据的一致性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceName' => null,
        'serverHost' => null
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
    * serviceName  测试类型名称，用于界面显示，不能使用当前保留名，长度小于等于16位字符
    * serverHost  server_host是由用户提供的域名。 我们会通过此域名进行接口调用，请以https/http开头,长度小于等于128位字符。 TestHub将会通过此域名下的接口，保证服务数据与用户系统数据的一致性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceName' => 'service_name',
            'serverHost' => 'server_host'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceName  测试类型名称，用于界面显示，不能使用当前保留名，长度小于等于16位字符
    * serverHost  server_host是由用户提供的域名。 我们会通过此域名进行接口调用，请以https/http开头,长度小于等于128位字符。 TestHub将会通过此域名下的接口，保证服务数据与用户系统数据的一致性。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceName' => 'setServiceName',
            'serverHost' => 'setServerHost'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceName  测试类型名称，用于界面显示，不能使用当前保留名，长度小于等于16位字符
    * serverHost  server_host是由用户提供的域名。 我们会通过此域名进行接口调用，请以https/http开头,长度小于等于128位字符。 TestHub将会通过此域名下的接口，保证服务数据与用户系统数据的一致性。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceName' => 'getServiceName',
            'serverHost' => 'getServerHost'
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
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['serverHost'] = isset($data['serverHost']) ? $data['serverHost'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceName'] === null) {
            $invalidProperties[] = "'serviceName' can't be null";
        }
        if ($this->container['serverHost'] === null) {
            $invalidProperties[] = "'serverHost' can't be null";
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
    * Gets serviceName
    *  测试类型名称，用于界面显示，不能使用当前保留名，长度小于等于16位字符
    *
    * @return string
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string $serviceName 测试类型名称，用于界面显示，不能使用当前保留名，长度小于等于16位字符
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets serverHost
    *  server_host是由用户提供的域名。 我们会通过此域名进行接口调用，请以https/http开头,长度小于等于128位字符。 TestHub将会通过此域名下的接口，保证服务数据与用户系统数据的一致性。
    *
    * @return string
    */
    public function getServerHost()
    {
        return $this->container['serverHost'];
    }

    /**
    * Sets serverHost
    *
    * @param string $serverHost server_host是由用户提供的域名。 我们会通过此域名进行接口调用，请以https/http开头,长度小于等于128位字符。 TestHub将会通过此域名下的接口，保证服务数据与用户系统数据的一致性。
    *
    * @return $this
    */
    public function setServerHost($serverHost)
    {
        $this->container['serverHost'] = $serverHost;
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

