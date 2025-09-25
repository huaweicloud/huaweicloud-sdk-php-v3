<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostProtectHistoryResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostProtectHistoryResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * occrTime  **参数解释**: 检测时间，单位毫秒。（已废弃，请使用occur_time） **取值范围**: 最小值0，最大值4070880000000
    * occurTime  **参数解释**: 检测时间，单位毫秒。 **取值范围**: 最小值0，最大值4070880000000
    * filePath  **参数解释**： 防护文件路径 **取值范围**： 字符长度0-2000位
    * fileOperation  **参数解释**: 事件描述，即文件操作类型 **取值范围**: - add: 新增文件。 - delete: 删除文件。 - modify: 修改文件内容。 - attribute: 修改文件属性。 - unknown: 未知。
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度0-64位
    * processId  **参数解释**: 进程ID **取值范围**: 最小值0，最大值2147483647
    * processName  **参数解释**: 进程名称 **取值范围**: 字符长度0-200位
    * processCmd  **参数解释**: 进程命令行 **取值范围**: 字符长度0-8192位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'occrTime' => 'int',
            'occurTime' => 'int',
            'filePath' => 'string',
            'fileOperation' => 'string',
            'hostIp' => 'string',
            'processId' => 'int',
            'processName' => 'string',
            'processCmd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * occrTime  **参数解释**: 检测时间，单位毫秒。（已废弃，请使用occur_time） **取值范围**: 最小值0，最大值4070880000000
    * occurTime  **参数解释**: 检测时间，单位毫秒。 **取值范围**: 最小值0，最大值4070880000000
    * filePath  **参数解释**： 防护文件路径 **取值范围**： 字符长度0-2000位
    * fileOperation  **参数解释**: 事件描述，即文件操作类型 **取值范围**: - add: 新增文件。 - delete: 删除文件。 - modify: 修改文件内容。 - attribute: 修改文件属性。 - unknown: 未知。
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度0-64位
    * processId  **参数解释**: 进程ID **取值范围**: 最小值0，最大值2147483647
    * processName  **参数解释**: 进程名称 **取值范围**: 字符长度0-200位
    * processCmd  **参数解释**: 进程命令行 **取值范围**: 字符长度0-8192位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'occrTime' => 'int64',
        'occurTime' => 'int64',
        'filePath' => null,
        'fileOperation' => null,
        'hostIp' => null,
        'processId' => 'int32',
        'processName' => null,
        'processCmd' => null
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
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * occrTime  **参数解释**: 检测时间，单位毫秒。（已废弃，请使用occur_time） **取值范围**: 最小值0，最大值4070880000000
    * occurTime  **参数解释**: 检测时间，单位毫秒。 **取值范围**: 最小值0，最大值4070880000000
    * filePath  **参数解释**： 防护文件路径 **取值范围**： 字符长度0-2000位
    * fileOperation  **参数解释**: 事件描述，即文件操作类型 **取值范围**: - add: 新增文件。 - delete: 删除文件。 - modify: 修改文件内容。 - attribute: 修改文件属性。 - unknown: 未知。
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度0-64位
    * processId  **参数解释**: 进程ID **取值范围**: 最小值0，最大值2147483647
    * processName  **参数解释**: 进程名称 **取值范围**: 字符长度0-200位
    * processCmd  **参数解释**: 进程命令行 **取值范围**: 字符长度0-8192位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'occrTime' => 'occr_time',
            'occurTime' => 'occur_time',
            'filePath' => 'file_path',
            'fileOperation' => 'file_operation',
            'hostIp' => 'host_ip',
            'processId' => 'process_id',
            'processName' => 'process_name',
            'processCmd' => 'process_cmd'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * occrTime  **参数解释**: 检测时间，单位毫秒。（已废弃，请使用occur_time） **取值范围**: 最小值0，最大值4070880000000
    * occurTime  **参数解释**: 检测时间，单位毫秒。 **取值范围**: 最小值0，最大值4070880000000
    * filePath  **参数解释**： 防护文件路径 **取值范围**： 字符长度0-2000位
    * fileOperation  **参数解释**: 事件描述，即文件操作类型 **取值范围**: - add: 新增文件。 - delete: 删除文件。 - modify: 修改文件内容。 - attribute: 修改文件属性。 - unknown: 未知。
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度0-64位
    * processId  **参数解释**: 进程ID **取值范围**: 最小值0，最大值2147483647
    * processName  **参数解释**: 进程名称 **取值范围**: 字符长度0-200位
    * processCmd  **参数解释**: 进程命令行 **取值范围**: 字符长度0-8192位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'occrTime' => 'setOccrTime',
            'occurTime' => 'setOccurTime',
            'filePath' => 'setFilePath',
            'fileOperation' => 'setFileOperation',
            'hostIp' => 'setHostIp',
            'processId' => 'setProcessId',
            'processName' => 'setProcessName',
            'processCmd' => 'setProcessCmd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * occrTime  **参数解释**: 检测时间，单位毫秒。（已废弃，请使用occur_time） **取值范围**: 最小值0，最大值4070880000000
    * occurTime  **参数解释**: 检测时间，单位毫秒。 **取值范围**: 最小值0，最大值4070880000000
    * filePath  **参数解释**： 防护文件路径 **取值范围**： 字符长度0-2000位
    * fileOperation  **参数解释**: 事件描述，即文件操作类型 **取值范围**: - add: 新增文件。 - delete: 删除文件。 - modify: 修改文件内容。 - attribute: 修改文件属性。 - unknown: 未知。
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度0-64位
    * processId  **参数解释**: 进程ID **取值范围**: 最小值0，最大值2147483647
    * processName  **参数解释**: 进程名称 **取值范围**: 字符长度0-200位
    * processCmd  **参数解释**: 进程命令行 **取值范围**: 字符长度0-8192位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'occrTime' => 'getOccrTime',
            'occurTime' => 'getOccurTime',
            'filePath' => 'getFilePath',
            'fileOperation' => 'getFileOperation',
            'hostIp' => 'getHostIp',
            'processId' => 'getProcessId',
            'processName' => 'getProcessName',
            'processCmd' => 'getProcessCmd'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['occrTime'] = isset($data['occrTime']) ? $data['occrTime'] : null;
        $this->container['occurTime'] = isset($data['occurTime']) ? $data['occurTime'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileOperation'] = isset($data['fileOperation']) ? $data['fileOperation'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['processId'] = isset($data['processId']) ? $data['processId'] : null;
        $this->container['processName'] = isset($data['processName']) ? $data['processName'] : null;
        $this->container['processCmd'] = isset($data['processCmd']) ? $data['processCmd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['occrTime']) && ($this->container['occrTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'occrTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['occrTime']) && ($this->container['occrTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'occrTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 2000)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['filePath']) && !preg_match("/^.*$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileOperation']) && (mb_strlen($this->container['fileOperation']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileOperation', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileOperation']) && (mb_strlen($this->container['fileOperation']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileOperation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processId']) && ($this->container['processId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'processId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['processId']) && ($this->container['processId'] < 0)) {
                $invalidProperties[] = "invalid value for 'processId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) > 200)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) < 0)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processCmd']) && (mb_strlen($this->container['processCmd']) > 8192)) {
                $invalidProperties[] = "invalid value for 'processCmd', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['processCmd']) && (mb_strlen($this->container['processCmd']) < 0)) {
                $invalidProperties[] = "invalid value for 'processCmd', the character length must be bigger than or equal to 0.";
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
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets occrTime
    *  **参数解释**: 检测时间，单位毫秒。（已废弃，请使用occur_time） **取值范围**: 最小值0，最大值4070880000000
    *
    * @return int|null
    */
    public function getOccrTime()
    {
        return $this->container['occrTime'];
    }

    /**
    * Sets occrTime
    *
    * @param int|null $occrTime **参数解释**: 检测时间，单位毫秒。（已废弃，请使用occur_time） **取值范围**: 最小值0，最大值4070880000000
    *
    * @return $this
    */
    public function setOccrTime($occrTime)
    {
        $this->container['occrTime'] = $occrTime;
        return $this;
    }

    /**
    * Gets occurTime
    *  **参数解释**: 检测时间，单位毫秒。 **取值范围**: 最小值0，最大值4070880000000
    *
    * @return int|null
    */
    public function getOccurTime()
    {
        return $this->container['occurTime'];
    }

    /**
    * Sets occurTime
    *
    * @param int|null $occurTime **参数解释**: 检测时间，单位毫秒。 **取值范围**: 最小值0，最大值4070880000000
    *
    * @return $this
    */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**： 防护文件路径 **取值范围**： 字符长度0-2000位
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
    * @param string|null $filePath **参数解释**： 防护文件路径 **取值范围**： 字符长度0-2000位
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileOperation
    *  **参数解释**: 事件描述，即文件操作类型 **取值范围**: - add: 新增文件。 - delete: 删除文件。 - modify: 修改文件内容。 - attribute: 修改文件属性。 - unknown: 未知。
    *
    * @return string|null
    */
    public function getFileOperation()
    {
        return $this->container['fileOperation'];
    }

    /**
    * Sets fileOperation
    *
    * @param string|null $fileOperation **参数解释**: 事件描述，即文件操作类型 **取值范围**: - add: 新增文件。 - delete: 删除文件。 - modify: 修改文件内容。 - attribute: 修改文件属性。 - unknown: 未知。
    *
    * @return $this
    */
    public function setFileOperation($fileOperation)
    {
        $this->container['fileOperation'] = $fileOperation;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 服务器IP **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**: 服务器IP **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets processId
    *  **参数解释**: 进程ID **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProcessId()
    {
        return $this->container['processId'];
    }

    /**
    * Sets processId
    *
    * @param int|null $processId **参数解释**: 进程ID **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProcessId($processId)
    {
        $this->container['processId'] = $processId;
        return $this;
    }

    /**
    * Gets processName
    *  **参数解释**: 进程名称 **取值范围**: 字符长度0-200位
    *
    * @return string|null
    */
    public function getProcessName()
    {
        return $this->container['processName'];
    }

    /**
    * Sets processName
    *
    * @param string|null $processName **参数解释**: 进程名称 **取值范围**: 字符长度0-200位
    *
    * @return $this
    */
    public function setProcessName($processName)
    {
        $this->container['processName'] = $processName;
        return $this;
    }

    /**
    * Gets processCmd
    *  **参数解释**: 进程命令行 **取值范围**: 字符长度0-8192位
    *
    * @return string|null
    */
    public function getProcessCmd()
    {
        return $this->container['processCmd'];
    }

    /**
    * Sets processCmd
    *
    * @param string|null $processCmd **参数解释**: 进程命令行 **取值范围**: 字符长度0-8192位
    *
    * @return $this
    */
    public function setProcessCmd($processCmd)
    {
        $this->container['processCmd'] = $processCmd;
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

