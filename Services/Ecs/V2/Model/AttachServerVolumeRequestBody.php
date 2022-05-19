<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachServerVolumeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachServerVolumeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeAttachment  volumeAttachment
    * dryRun  是否只预检此次请求。  true：发送检查请求，不会挂载磁盘。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 false：发送正常请求，通过检查后并且进行挂载磁盘请求。 默认值：false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeAttachment' => '\HuaweiCloud\SDK\Ecs\V2\Model\AttachServerVolumeOption',
            'dryRun' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeAttachment  volumeAttachment
    * dryRun  是否只预检此次请求。  true：发送检查请求，不会挂载磁盘。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 false：发送正常请求，通过检查后并且进行挂载磁盘请求。 默认值：false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeAttachment' => null,
        'dryRun' => null
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
    * volumeAttachment  volumeAttachment
    * dryRun  是否只预检此次请求。  true：发送检查请求，不会挂载磁盘。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 false：发送正常请求，通过检查后并且进行挂载磁盘请求。 默认值：false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeAttachment' => 'volumeAttachment',
            'dryRun' => 'dry_run'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeAttachment  volumeAttachment
    * dryRun  是否只预检此次请求。  true：发送检查请求，不会挂载磁盘。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 false：发送正常请求，通过检查后并且进行挂载磁盘请求。 默认值：false
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeAttachment' => 'setVolumeAttachment',
            'dryRun' => 'setDryRun'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeAttachment  volumeAttachment
    * dryRun  是否只预检此次请求。  true：发送检查请求，不会挂载磁盘。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 false：发送正常请求，通过检查后并且进行挂载磁盘请求。 默认值：false
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeAttachment' => 'getVolumeAttachment',
            'dryRun' => 'getDryRun'
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
        $this->container['volumeAttachment'] = isset($data['volumeAttachment']) ? $data['volumeAttachment'] : null;
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volumeAttachment'] === null) {
            $invalidProperties[] = "'volumeAttachment' can't be null";
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
    * Gets volumeAttachment
    *  volumeAttachment
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\AttachServerVolumeOption
    */
    public function getVolumeAttachment()
    {
        return $this->container['volumeAttachment'];
    }

    /**
    * Sets volumeAttachment
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\AttachServerVolumeOption $volumeAttachment volumeAttachment
    *
    * @return $this
    */
    public function setVolumeAttachment($volumeAttachment)
    {
        $this->container['volumeAttachment'] = $volumeAttachment;
        return $this;
    }

    /**
    * Gets dryRun
    *  是否只预检此次请求。  true：发送检查请求，不会挂载磁盘。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 false：发送正常请求，通过检查后并且进行挂载磁盘请求。 默认值：false
    *
    * @return bool|null
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool|null $dryRun 是否只预检此次请求。  true：发送检查请求，不会挂载磁盘。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 false：发送正常请求，通过检查后并且进行挂载磁盘请求。 默认值：false
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
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

