<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTtsAuditionFileResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTtsAuditionFileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isFileComplete  试听文件是否已生成完成。该标记为false时，应该每隔5秒再次调用本接口获取试听文件。当存在该参数时，将会返回以下message和files两个字段信息
    * message  异常信息。
    * files  试听文件列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isFileComplete' => 'bool',
            'message' => 'string',
            'files' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AuditionFile[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isFileComplete  试听文件是否已生成完成。该标记为false时，应该每隔5秒再次调用本接口获取试听文件。当存在该参数时，将会返回以下message和files两个字段信息
    * message  异常信息。
    * files  试听文件列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isFileComplete' => null,
        'message' => null,
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
    * isFileComplete  试听文件是否已生成完成。该标记为false时，应该每隔5秒再次调用本接口获取试听文件。当存在该参数时，将会返回以下message和files两个字段信息
    * message  异常信息。
    * files  试听文件列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isFileComplete' => 'is_file_complete',
            'message' => 'message',
            'files' => 'files'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isFileComplete  试听文件是否已生成完成。该标记为false时，应该每隔5秒再次调用本接口获取试听文件。当存在该参数时，将会返回以下message和files两个字段信息
    * message  异常信息。
    * files  试听文件列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'isFileComplete' => 'setIsFileComplete',
            'message' => 'setMessage',
            'files' => 'setFiles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isFileComplete  试听文件是否已生成完成。该标记为false时，应该每隔5秒再次调用本接口获取试听文件。当存在该参数时，将会返回以下message和files两个字段信息
    * message  异常信息。
    * files  试听文件列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'isFileComplete' => 'getIsFileComplete',
            'message' => 'getMessage',
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
        $this->container['isFileComplete'] = isset($data['isFileComplete']) ? $data['isFileComplete'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 10240)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
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
    * Gets isFileComplete
    *  试听文件是否已生成完成。该标记为false时，应该每隔5秒再次调用本接口获取试听文件。当存在该参数时，将会返回以下message和files两个字段信息
    *
    * @return bool|null
    */
    public function getIsFileComplete()
    {
        return $this->container['isFileComplete'];
    }

    /**
    * Sets isFileComplete
    *
    * @param bool|null $isFileComplete 试听文件是否已生成完成。该标记为false时，应该每隔5秒再次调用本接口获取试听文件。当存在该参数时，将会返回以下message和files两个字段信息
    *
    * @return $this
    */
    public function setIsFileComplete($isFileComplete)
    {
        $this->container['isFileComplete'] = $isFileComplete;
        return $this;
    }

    /**
    * Gets message
    *  异常信息。
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
    * @param string|null $message 异常信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets files
    *  试听文件列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AuditionFile[]|null
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AuditionFile[]|null $files 试听文件列表。
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

