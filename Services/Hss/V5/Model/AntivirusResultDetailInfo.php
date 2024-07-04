<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AntivirusResultDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AntivirusResultDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resultId  病毒查杀结果ID
    * malwareName  病毒名称
    * filePath  文件路径
    * fileHash  文件哈希
    * fileSize  文件大小
    * fileOwner  文件属主
    * fileAttr  文件属性
    * fileCtime  文件创建时间
    * fileMtime  文件更新时间
    * updateTime  更新时间，毫秒
    * agentId  Agent ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resultId' => 'string',
            'malwareName' => 'string',
            'filePath' => 'string',
            'fileHash' => 'string',
            'fileSize' => 'int',
            'fileOwner' => 'string',
            'fileAttr' => 'string',
            'fileCtime' => 'int',
            'fileMtime' => 'int',
            'updateTime' => 'int',
            'agentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resultId  病毒查杀结果ID
    * malwareName  病毒名称
    * filePath  文件路径
    * fileHash  文件哈希
    * fileSize  文件大小
    * fileOwner  文件属主
    * fileAttr  文件属性
    * fileCtime  文件创建时间
    * fileMtime  文件更新时间
    * updateTime  更新时间，毫秒
    * agentId  Agent ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resultId' => null,
        'malwareName' => null,
        'filePath' => null,
        'fileHash' => null,
        'fileSize' => 'int64',
        'fileOwner' => null,
        'fileAttr' => null,
        'fileCtime' => 'int64',
        'fileMtime' => 'int64',
        'updateTime' => 'int64',
        'agentId' => null
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
    * resultId  病毒查杀结果ID
    * malwareName  病毒名称
    * filePath  文件路径
    * fileHash  文件哈希
    * fileSize  文件大小
    * fileOwner  文件属主
    * fileAttr  文件属性
    * fileCtime  文件创建时间
    * fileMtime  文件更新时间
    * updateTime  更新时间，毫秒
    * agentId  Agent ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resultId' => 'result_id',
            'malwareName' => 'malware_name',
            'filePath' => 'file_path',
            'fileHash' => 'file_hash',
            'fileSize' => 'file_size',
            'fileOwner' => 'file_owner',
            'fileAttr' => 'file_attr',
            'fileCtime' => 'file_ctime',
            'fileMtime' => 'file_mtime',
            'updateTime' => 'update_time',
            'agentId' => 'agent_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resultId  病毒查杀结果ID
    * malwareName  病毒名称
    * filePath  文件路径
    * fileHash  文件哈希
    * fileSize  文件大小
    * fileOwner  文件属主
    * fileAttr  文件属性
    * fileCtime  文件创建时间
    * fileMtime  文件更新时间
    * updateTime  更新时间，毫秒
    * agentId  Agent ID
    *
    * @var string[]
    */
    protected static $setters = [
            'resultId' => 'setResultId',
            'malwareName' => 'setMalwareName',
            'filePath' => 'setFilePath',
            'fileHash' => 'setFileHash',
            'fileSize' => 'setFileSize',
            'fileOwner' => 'setFileOwner',
            'fileAttr' => 'setFileAttr',
            'fileCtime' => 'setFileCtime',
            'fileMtime' => 'setFileMtime',
            'updateTime' => 'setUpdateTime',
            'agentId' => 'setAgentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resultId  病毒查杀结果ID
    * malwareName  病毒名称
    * filePath  文件路径
    * fileHash  文件哈希
    * fileSize  文件大小
    * fileOwner  文件属主
    * fileAttr  文件属性
    * fileCtime  文件创建时间
    * fileMtime  文件更新时间
    * updateTime  更新时间，毫秒
    * agentId  Agent ID
    *
    * @var string[]
    */
    protected static $getters = [
            'resultId' => 'getResultId',
            'malwareName' => 'getMalwareName',
            'filePath' => 'getFilePath',
            'fileHash' => 'getFileHash',
            'fileSize' => 'getFileSize',
            'fileOwner' => 'getFileOwner',
            'fileAttr' => 'getFileAttr',
            'fileCtime' => 'getFileCtime',
            'fileMtime' => 'getFileMtime',
            'updateTime' => 'getUpdateTime',
            'agentId' => 'getAgentId'
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
        $this->container['resultId'] = isset($data['resultId']) ? $data['resultId'] : null;
        $this->container['malwareName'] = isset($data['malwareName']) ? $data['malwareName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileHash'] = isset($data['fileHash']) ? $data['fileHash'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileOwner'] = isset($data['fileOwner']) ? $data['fileOwner'] : null;
        $this->container['fileAttr'] = isset($data['fileAttr']) ? $data['fileAttr'] : null;
        $this->container['fileCtime'] = isset($data['fileCtime']) ? $data['fileCtime'] : null;
        $this->container['fileMtime'] = isset($data['fileMtime']) ? $data['fileMtime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resultId']) && !preg_match("/^.*$/", $this->container['resultId'])) {
                $invalidProperties[] = "invalid value for 'resultId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['malwareName']) && !preg_match("/^.*$/", $this->container['malwareName'])) {
                $invalidProperties[] = "invalid value for 'malwareName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['filePath']) && !preg_match("/^.*$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileHash']) && !preg_match("/^.*$/", $this->container['fileHash'])) {
                $invalidProperties[] = "invalid value for 'fileHash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileOwner']) && !preg_match("/^.*$/", $this->container['fileOwner'])) {
                $invalidProperties[] = "invalid value for 'fileOwner', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileAttr']) && !preg_match("/^.*$/", $this->container['fileAttr'])) {
                $invalidProperties[] = "invalid value for 'fileAttr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileCtime']) && ($this->container['fileCtime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'fileCtime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['fileCtime']) && ($this->container['fileCtime'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileCtime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileMtime']) && ($this->container['fileMtime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'fileMtime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['fileMtime']) && ($this->container['fileMtime'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileMtime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentId']) && !preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
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
    * Gets resultId
    *  病毒查杀结果ID
    *
    * @return string|null
    */
    public function getResultId()
    {
        return $this->container['resultId'];
    }

    /**
    * Sets resultId
    *
    * @param string|null $resultId 病毒查杀结果ID
    *
    * @return $this
    */
    public function setResultId($resultId)
    {
        $this->container['resultId'] = $resultId;
        return $this;
    }

    /**
    * Gets malwareName
    *  病毒名称
    *
    * @return string|null
    */
    public function getMalwareName()
    {
        return $this->container['malwareName'];
    }

    /**
    * Sets malwareName
    *
    * @param string|null $malwareName 病毒名称
    *
    * @return $this
    */
    public function setMalwareName($malwareName)
    {
        $this->container['malwareName'] = $malwareName;
        return $this;
    }

    /**
    * Gets filePath
    *  文件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileHash
    *  文件哈希
    *
    * @return string|null
    */
    public function getFileHash()
    {
        return $this->container['fileHash'];
    }

    /**
    * Sets fileHash
    *
    * @param string|null $fileHash 文件哈希
    *
    * @return $this
    */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;
        return $this;
    }

    /**
    * Gets fileSize
    *  文件大小
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize 文件大小
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets fileOwner
    *  文件属主
    *
    * @return string|null
    */
    public function getFileOwner()
    {
        return $this->container['fileOwner'];
    }

    /**
    * Sets fileOwner
    *
    * @param string|null $fileOwner 文件属主
    *
    * @return $this
    */
    public function setFileOwner($fileOwner)
    {
        $this->container['fileOwner'] = $fileOwner;
        return $this;
    }

    /**
    * Gets fileAttr
    *  文件属性
    *
    * @return string|null
    */
    public function getFileAttr()
    {
        return $this->container['fileAttr'];
    }

    /**
    * Sets fileAttr
    *
    * @param string|null $fileAttr 文件属性
    *
    * @return $this
    */
    public function setFileAttr($fileAttr)
    {
        $this->container['fileAttr'] = $fileAttr;
        return $this;
    }

    /**
    * Gets fileCtime
    *  文件创建时间
    *
    * @return int|null
    */
    public function getFileCtime()
    {
        return $this->container['fileCtime'];
    }

    /**
    * Sets fileCtime
    *
    * @param int|null $fileCtime 文件创建时间
    *
    * @return $this
    */
    public function setFileCtime($fileCtime)
    {
        $this->container['fileCtime'] = $fileCtime;
        return $this;
    }

    /**
    * Gets fileMtime
    *  文件更新时间
    *
    * @return int|null
    */
    public function getFileMtime()
    {
        return $this->container['fileMtime'];
    }

    /**
    * Sets fileMtime
    *
    * @param int|null $fileMtime 文件更新时间
    *
    * @return $this
    */
    public function setFileMtime($fileMtime)
    {
        $this->container['fileMtime'] = $fileMtime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，毫秒
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间，毫秒
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets agentId
    *  Agent ID
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId Agent ID
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
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

