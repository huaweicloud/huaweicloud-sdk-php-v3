<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SimpleTagDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SimpleTagDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  标签名称
    * message  标签描述
    * target  目标commit_id
    * gpgKey  gpgKey
    * canDelete  是否可以被删除
    * canRead  是否可以被查看
    * canDownload  是否可以被下载
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'message' => 'string',
            'target' => 'string',
            'gpgKey' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GpgKeyDto',
            'canDelete' => 'bool',
            'canRead' => 'bool',
            'canDownload' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  标签名称
    * message  标签描述
    * target  目标commit_id
    * gpgKey  gpgKey
    * canDelete  是否可以被删除
    * canRead  是否可以被查看
    * canDownload  是否可以被下载
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'message' => null,
        'target' => null,
        'gpgKey' => null,
        'canDelete' => null,
        'canRead' => null,
        'canDownload' => null
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
    * name  标签名称
    * message  标签描述
    * target  目标commit_id
    * gpgKey  gpgKey
    * canDelete  是否可以被删除
    * canRead  是否可以被查看
    * canDownload  是否可以被下载
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'message' => 'message',
            'target' => 'target',
            'gpgKey' => 'gpgKey',
            'canDelete' => 'can_delete',
            'canRead' => 'can_read',
            'canDownload' => 'can_download'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  标签名称
    * message  标签描述
    * target  目标commit_id
    * gpgKey  gpgKey
    * canDelete  是否可以被删除
    * canRead  是否可以被查看
    * canDownload  是否可以被下载
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'message' => 'setMessage',
            'target' => 'setTarget',
            'gpgKey' => 'setGpgKey',
            'canDelete' => 'setCanDelete',
            'canRead' => 'setCanRead',
            'canDownload' => 'setCanDownload'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  标签名称
    * message  标签描述
    * target  目标commit_id
    * gpgKey  gpgKey
    * canDelete  是否可以被删除
    * canRead  是否可以被查看
    * canDownload  是否可以被下载
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'message' => 'getMessage',
            'target' => 'getTarget',
            'gpgKey' => 'getGpgKey',
            'canDelete' => 'getCanDelete',
            'canRead' => 'getCanRead',
            'canDownload' => 'getCanDownload'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['gpgKey'] = isset($data['gpgKey']) ? $data['gpgKey'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canRead'] = isset($data['canRead']) ? $data['canRead'] : null;
        $this->container['canDownload'] = isset($data['canDownload']) ? $data['canDownload'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 2000)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 0)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['target']) && (mb_strlen($this->container['target']) > 40)) {
                $invalidProperties[] = "invalid value for 'target', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['target']) && (mb_strlen($this->container['target']) < 40)) {
                $invalidProperties[] = "invalid value for 'target', the character length must be bigger than or equal to 40.";
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
    *  标签名称
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
    * @param string|null $name 标签名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets message
    *  标签描述
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
    * @param string|null $message 标签描述
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets target
    *  目标commit_id
    *
    * @return string|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param string|null $target 目标commit_id
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets gpgKey
    *  gpgKey
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GpgKeyDto|null
    */
    public function getGpgKey()
    {
        return $this->container['gpgKey'];
    }

    /**
    * Sets gpgKey
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GpgKeyDto|null $gpgKey gpgKey
    *
    * @return $this
    */
    public function setGpgKey($gpgKey)
    {
        $this->container['gpgKey'] = $gpgKey;
        return $this;
    }

    /**
    * Gets canDelete
    *  是否可以被删除
    *
    * @return bool|null
    */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
    * Sets canDelete
    *
    * @param bool|null $canDelete 是否可以被删除
    *
    * @return $this
    */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;
        return $this;
    }

    /**
    * Gets canRead
    *  是否可以被查看
    *
    * @return bool|null
    */
    public function getCanRead()
    {
        return $this->container['canRead'];
    }

    /**
    * Sets canRead
    *
    * @param bool|null $canRead 是否可以被查看
    *
    * @return $this
    */
    public function setCanRead($canRead)
    {
        $this->container['canRead'] = $canRead;
        return $this;
    }

    /**
    * Gets canDownload
    *  是否可以被下载
    *
    * @return bool|null
    */
    public function getCanDownload()
    {
        return $this->container['canDownload'];
    }

    /**
    * Sets canDownload
    *
    * @param bool|null $canDownload 是否可以被下载
    *
    * @return $this
    */
    public function setCanDownload($canDownload)
    {
        $this->container['canDownload'] = $canDownload;
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

