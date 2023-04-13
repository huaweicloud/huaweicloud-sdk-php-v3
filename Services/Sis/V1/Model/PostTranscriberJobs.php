<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostTranscriberJobs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostTranscriberJobs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * config  config
    * dataUrl  存放在OBS的音频文件路径。OBS的region要和请求服务的region保持一致，region不一致则OBS不可用，即使obs是公开访问权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'config' => '\HuaweiCloud\SDK\Sis\V1\Model\TranscriberConfig',
            'dataUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * config  config
    * dataUrl  存放在OBS的音频文件路径。OBS的region要和请求服务的region保持一致，region不一致则OBS不可用，即使obs是公开访问权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'config' => null,
        'dataUrl' => null
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
    * config  config
    * dataUrl  存放在OBS的音频文件路径。OBS的region要和请求服务的region保持一致，region不一致则OBS不可用，即使obs是公开访问权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'config' => 'config',
            'dataUrl' => 'data_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * config  config
    * dataUrl  存放在OBS的音频文件路径。OBS的region要和请求服务的region保持一致，region不一致则OBS不可用，即使obs是公开访问权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'config' => 'setConfig',
            'dataUrl' => 'setDataUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * config  config
    * dataUrl  存放在OBS的音频文件路径。OBS的region要和请求服务的region保持一致，region不一致则OBS不可用，即使obs是公开访问权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'config' => 'getConfig',
            'dataUrl' => 'getDataUrl'
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
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['dataUrl'] = isset($data['dataUrl']) ? $data['dataUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
        }
        if ($this->container['dataUrl'] === null) {
            $invalidProperties[] = "'dataUrl' can't be null";
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
    * Gets config
    *  config
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\TranscriberConfig
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\TranscriberConfig $config config
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets dataUrl
    *  存放在OBS的音频文件路径。OBS的region要和请求服务的region保持一致，region不一致则OBS不可用，即使obs是公开访问权限。
    *
    * @return string
    */
    public function getDataUrl()
    {
        return $this->container['dataUrl'];
    }

    /**
    * Sets dataUrl
    *
    * @param string $dataUrl 存放在OBS的音频文件路径。OBS的region要和请求服务的region保持一致，region不一致则OBS不可用，即使obs是公开访问权限。
    *
    * @return $this
    */
    public function setDataUrl($dataUrl)
    {
        $this->container['dataUrl'] = $dataUrl;
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

