<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDocWatermarkRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDocWatermarkRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * docType  待提取水印的文档类型
    * filePassword  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * file  上传要提取水印的文档
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'docType' => 'string',
            'filePassword' => 'string',
            'file' => '\SplFileObject'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * docType  待提取水印的文档类型
    * filePassword  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * file  上传要提取水印的文档
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'docType' => null,
        'filePassword' => null,
        'file' => 'binary'
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
    * docType  待提取水印的文档类型
    * filePassword  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * file  上传要提取水印的文档
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'docType' => 'doc_type',
            'filePassword' => 'file_password',
            'file' => 'file'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * docType  待提取水印的文档类型
    * filePassword  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * file  上传要提取水印的文档
    *
    * @var string[]
    */
    protected static $setters = [
            'docType' => 'setDocType',
            'filePassword' => 'setFilePassword',
            'file' => 'setFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * docType  待提取水印的文档类型
    * filePassword  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * file  上传要提取水印的文档
    *
    * @var string[]
    */
    protected static $getters = [
            'docType' => 'getDocType',
            'filePassword' => 'getFilePassword',
            'file' => 'getFile'
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
    const DOC_TYPE_WORD = 'WORD';
    const DOC_TYPE_EXCEL = 'EXCEL';
    const DOC_TYPE_PDF = 'PDF';
    const DOC_TYPE_PPT = 'PPT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDocTypeAllowableValues()
    {
        return [
            self::DOC_TYPE_WORD,
            self::DOC_TYPE_EXCEL,
            self::DOC_TYPE_PDF,
            self::DOC_TYPE_PPT,
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
        $this->container['docType'] = isset($data['docType']) ? $data['docType'] : null;
        $this->container['filePassword'] = isset($data['filePassword']) ? $data['filePassword'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['docType'] === null) {
            $invalidProperties[] = "'docType' can't be null";
        }
            $allowedValues = $this->getDocTypeAllowableValues();
                if (!is_null($this->container['docType']) && !in_array($this->container['docType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'docType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['filePassword']) && (mb_strlen($this->container['filePassword']) > 256)) {
                $invalidProperties[] = "invalid value for 'filePassword', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['filePassword']) && (mb_strlen($this->container['filePassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePassword', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
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
    * Gets docType
    *  待提取水印的文档类型
    *
    * @return string
    */
    public function getDocType()
    {
        return $this->container['docType'];
    }

    /**
    * Sets docType
    *
    * @param string $docType 待提取水印的文档类型
    *
    * @return $this
    */
    public function setDocType($docType)
    {
        $this->container['docType'] = $docType;
        return $this;
    }

    /**
    * Gets filePassword
    *  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    *
    * @return string|null
    */
    public function getFilePassword()
    {
        return $this->container['filePassword'];
    }

    /**
    * Sets filePassword
    *
    * @param string|null $filePassword 解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    *
    * @return $this
    */
    public function setFilePassword($filePassword)
    {
        $this->container['filePassword'] = $filePassword;
        return $this;
    }

    /**
    * Gets file
    *  上传要提取水印的文档
    *
    * @return \SplFileObject
    */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
    * Sets file
    *
    * @param \SplFileObject $file 上传要提取水印的文档
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
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

