<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadAttachmentRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadAttachmentRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileType  固定枚举，当前仅支持user_task/用户任务
    * uploadFile  导入的流程文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileType' => 'string',
            'uploadFile' => '\SplFileObject'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileType  固定枚举，当前仅支持user_task/用户任务
    * uploadFile  导入的流程文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileType' => null,
        'uploadFile' => 'binary'
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
    * fileType  固定枚举，当前仅支持user_task/用户任务
    * uploadFile  导入的流程文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileType' => 'fileType',
            'uploadFile' => 'uploadFile'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileType  固定枚举，当前仅支持user_task/用户任务
    * uploadFile  导入的流程文件
    *
    * @var string[]
    */
    protected static $setters = [
            'fileType' => 'setFileType',
            'uploadFile' => 'setUploadFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileType  固定枚举，当前仅支持user_task/用户任务
    * uploadFile  导入的流程文件
    *
    * @var string[]
    */
    protected static $getters = [
            'fileType' => 'getFileType',
            'uploadFile' => 'getUploadFile'
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
    const FILE_TYPE_USER_TASK = 'user_task';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFileTypeAllowableValues()
    {
        return [
            self::FILE_TYPE_USER_TASK,
        ];
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
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['uploadFile'] = isset($data['uploadFile']) ? $data['uploadFile'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFileTypeAllowableValues();
                if (!is_null($this->container['fileType']) && !in_array($this->container['fileType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fileType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 36)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['uploadFile'] === null) {
            $invalidProperties[] = "'uploadFile' can't be null";
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
    * Gets fileType
    *  固定枚举，当前仅支持user_task/用户任务
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 固定枚举，当前仅支持user_task/用户任务
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets uploadFile
    *  导入的流程文件
    *
    * @return \SplFileObject
    */
    public function getUploadFile()
    {
        return $this->container['uploadFile'];
    }

    /**
    * Sets uploadFile
    *
    * @param \SplFileObject $uploadFile 导入的流程文件
    *
    * @return $this
    */
    public function setUploadFile($uploadFile)
    {
        $this->container['uploadFile'] = $uploadFile;
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

