<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDocWatermarkByAddressRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDocWatermarkByAddressRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  项目所在region的id，如：xx-xx-1。
    * docType  待提取水印的文档类型
    * srcFile  待提取文字暗水印的文档的地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    * filePassword  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'docType' => 'string',
            'srcFile' => 'string',
            'filePassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  项目所在region的id，如：xx-xx-1。
    * docType  待提取水印的文档类型
    * srcFile  待提取文字暗水印的文档的地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    * filePassword  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'docType' => null,
        'srcFile' => null,
        'filePassword' => null
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
    * regionId  项目所在region的id，如：xx-xx-1。
    * docType  待提取水印的文档类型
    * srcFile  待提取文字暗水印的文档的地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    * filePassword  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'docType' => 'doc_type',
            'srcFile' => 'src_file',
            'filePassword' => 'file_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  项目所在region的id，如：xx-xx-1。
    * docType  待提取水印的文档类型
    * srcFile  待提取文字暗水印的文档的地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    * filePassword  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'docType' => 'setDocType',
            'srcFile' => 'setSrcFile',
            'filePassword' => 'setFilePassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  项目所在region的id，如：xx-xx-1。
    * docType  待提取水印的文档类型
    * srcFile  待提取文字暗水印的文档的地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    * filePassword  解密文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'docType' => 'getDocType',
            'srcFile' => 'getSrcFile',
            'filePassword' => 'getFilePassword'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['docType'] = isset($data['docType']) ? $data['docType'] : null;
        $this->container['srcFile'] = isset($data['srcFile']) ? $data['srcFile'] : null;
        $this->container['filePassword'] = isset($data['filePassword']) ? $data['filePassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
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

        if ($this->container['srcFile'] === null) {
            $invalidProperties[] = "'srcFile' can't be null";
        }
            if (!is_null($this->container['filePassword']) && (mb_strlen($this->container['filePassword']) > 256)) {
                $invalidProperties[] = "invalid value for 'filePassword', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['filePassword']) && (mb_strlen($this->container['filePassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePassword', the character length must be bigger than or equal to 0.";
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
    * Gets regionId
    *  项目所在region的id，如：xx-xx-1。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 项目所在region的id，如：xx-xx-1。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
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
    * Gets srcFile
    *  待提取文字暗水印的文档的地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    *
    * @return string
    */
    public function getSrcFile()
    {
        return $this->container['srcFile'];
    }

    /**
    * Sets srcFile
    *
    * @param string $srcFile 待提取文字暗水印的文档的地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.doc**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.doc为对象全路径名。
    *
    * @return $this
    */
    public function setSrcFile($srcFile)
    {
        $this->container['srcFile'] = $srcFile;
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

