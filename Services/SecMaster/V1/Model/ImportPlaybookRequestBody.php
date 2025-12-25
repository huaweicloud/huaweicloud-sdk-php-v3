<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportPlaybookRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportPlaybookRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uploadFile  导入文件
    * uploadModel  剧本文件上传模式 import 剧本上传导入 verify 剧本上传校验
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uploadFile' => '\SplFileObject',
            'uploadModel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uploadFile  导入文件
    * uploadModel  剧本文件上传模式 import 剧本上传导入 verify 剧本上传校验
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uploadFile' => 'binary',
        'uploadModel' => null
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
    * uploadFile  导入文件
    * uploadModel  剧本文件上传模式 import 剧本上传导入 verify 剧本上传校验
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uploadFile' => 'uploadFile',
            'uploadModel' => 'upload_model'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uploadFile  导入文件
    * uploadModel  剧本文件上传模式 import 剧本上传导入 verify 剧本上传校验
    *
    * @var string[]
    */
    protected static $setters = [
            'uploadFile' => 'setUploadFile',
            'uploadModel' => 'setUploadModel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uploadFile  导入文件
    * uploadModel  剧本文件上传模式 import 剧本上传导入 verify 剧本上传校验
    *
    * @var string[]
    */
    protected static $getters = [
            'uploadFile' => 'getUploadFile',
            'uploadModel' => 'getUploadModel'
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
    const UPLOAD_MODEL_VERIFY = 'verify';
    const UPLOAD_MODEL_IMPORT = 'import';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUploadModelAllowableValues()
    {
        return [
            self::UPLOAD_MODEL_VERIFY,
            self::UPLOAD_MODEL_IMPORT,
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
        $this->container['uploadFile'] = isset($data['uploadFile']) ? $data['uploadFile'] : null;
        $this->container['uploadModel'] = isset($data['uploadModel']) ? $data['uploadModel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['uploadFile'] === null) {
            $invalidProperties[] = "'uploadFile' can't be null";
        }
            $allowedValues = $this->getUploadModelAllowableValues();
                if (!is_null($this->container['uploadModel']) && !in_array($this->container['uploadModel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'uploadModel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['uploadModel']) && (mb_strlen($this->container['uploadModel']) > 64)) {
                $invalidProperties[] = "invalid value for 'uploadModel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['uploadModel']) && (mb_strlen($this->container['uploadModel']) < 1)) {
                $invalidProperties[] = "invalid value for 'uploadModel', the character length must be bigger than or equal to 1.";
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
    * Gets uploadFile
    *  导入文件
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
    * @param \SplFileObject $uploadFile 导入文件
    *
    * @return $this
    */
    public function setUploadFile($uploadFile)
    {
        $this->container['uploadFile'] = $uploadFile;
        return $this;
    }

    /**
    * Gets uploadModel
    *  剧本文件上传模式 import 剧本上传导入 verify 剧本上传校验
    *
    * @return string|null
    */
    public function getUploadModel()
    {
        return $this->container['uploadModel'];
    }

    /**
    * Sets uploadModel
    *
    * @param string|null $uploadModel 剧本文件上传模式 import 剧本上传导入 verify 剧本上传校验
    *
    * @return $this
    */
    public function setUploadModel($uploadModel)
    {
        $this->container['uploadModel'] = $uploadModel;
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

