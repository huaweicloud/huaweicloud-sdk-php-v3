<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUploadFilesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUploadFilesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * successFileInfo  上传成功的文件信息列表。
    * failFileInfo  上传失败的文件信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'successFileInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\BatchUploadFilesResponseInfoSuccessFileInfo[]',
            'failFileInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\BatchUploadFilesResponseInfoFailFileInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * successFileInfo  上传成功的文件信息列表。
    * failFileInfo  上传失败的文件信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'successFileInfo' => null,
        'failFileInfo' => null
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
    * successFileInfo  上传成功的文件信息列表。
    * failFileInfo  上传失败的文件信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'successFileInfo' => 'success_file_info',
            'failFileInfo' => 'fail_file_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * successFileInfo  上传成功的文件信息列表。
    * failFileInfo  上传失败的文件信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'successFileInfo' => 'setSuccessFileInfo',
            'failFileInfo' => 'setFailFileInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * successFileInfo  上传成功的文件信息列表。
    * failFileInfo  上传失败的文件信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'successFileInfo' => 'getSuccessFileInfo',
            'failFileInfo' => 'getFailFileInfo'
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
        $this->container['successFileInfo'] = isset($data['successFileInfo']) ? $data['successFileInfo'] : null;
        $this->container['failFileInfo'] = isset($data['failFileInfo']) ? $data['failFileInfo'] : null;
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
    * Gets successFileInfo
    *  上传成功的文件信息列表。
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\BatchUploadFilesResponseInfoSuccessFileInfo[]|null
    */
    public function getSuccessFileInfo()
    {
        return $this->container['successFileInfo'];
    }

    /**
    * Sets successFileInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\BatchUploadFilesResponseInfoSuccessFileInfo[]|null $successFileInfo 上传成功的文件信息列表。
    *
    * @return $this
    */
    public function setSuccessFileInfo($successFileInfo)
    {
        $this->container['successFileInfo'] = $successFileInfo;
        return $this;
    }

    /**
    * Gets failFileInfo
    *  上传失败的文件信息列表。
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\BatchUploadFilesResponseInfoFailFileInfo[]|null
    */
    public function getFailFileInfo()
    {
        return $this->container['failFileInfo'];
    }

    /**
    * Sets failFileInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\BatchUploadFilesResponseInfoFailFileInfo[]|null $failFileInfo 上传失败的文件信息列表。
    *
    * @return $this
    */
    public function setFailFileInfo($failFileInfo)
    {
        $this->container['failFileInfo'] = $failFileInfo;
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

