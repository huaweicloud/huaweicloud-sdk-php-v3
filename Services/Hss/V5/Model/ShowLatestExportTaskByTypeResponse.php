<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLatestExportTaskByTypeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLatestExportTaskByTypeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释**： 任务ID **取值范围**： 字符长度1-64位
    * taskName  **参数解释**： 任务名称 **取值范围**： 字符长度1-128位
    * taskStatus  **参数解释**： 导出任务状态 **取值范围**： - success：成功 - failure：失败 - running：运行中
    * fileId  **参数解释**： 文件ID **取值范围**： 字符长度1-64位
    * fileName  **参数解释**： 文件名 **取值范围**： 字符长度1-255位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'taskStatus' => 'string',
            'fileId' => 'string',
            'fileName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释**： 任务ID **取值范围**： 字符长度1-64位
    * taskName  **参数解释**： 任务名称 **取值范围**： 字符长度1-128位
    * taskStatus  **参数解释**： 导出任务状态 **取值范围**： - success：成功 - failure：失败 - running：运行中
    * fileId  **参数解释**： 文件ID **取值范围**： 字符长度1-64位
    * fileName  **参数解释**： 文件名 **取值范围**： 字符长度1-255位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'taskStatus' => null,
        'fileId' => null,
        'fileName' => null
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
    * taskId  **参数解释**： 任务ID **取值范围**： 字符长度1-64位
    * taskName  **参数解释**： 任务名称 **取值范围**： 字符长度1-128位
    * taskStatus  **参数解释**： 导出任务状态 **取值范围**： - success：成功 - failure：失败 - running：运行中
    * fileId  **参数解释**： 文件ID **取值范围**： 字符长度1-64位
    * fileName  **参数解释**： 文件名 **取值范围**： 字符长度1-255位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'taskStatus' => 'task_status',
            'fileId' => 'file_id',
            'fileName' => 'file_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释**： 任务ID **取值范围**： 字符长度1-64位
    * taskName  **参数解释**： 任务名称 **取值范围**： 字符长度1-128位
    * taskStatus  **参数解释**： 导出任务状态 **取值范围**： - success：成功 - failure：失败 - running：运行中
    * fileId  **参数解释**： 文件ID **取值范围**： 字符长度1-64位
    * fileName  **参数解释**： 文件名 **取值范围**： 字符长度1-255位
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'taskStatus' => 'setTaskStatus',
            'fileId' => 'setFileId',
            'fileName' => 'setFileName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释**： 任务ID **取值范围**： 字符长度1-64位
    * taskName  **参数解释**： 任务名称 **取值范围**： 字符长度1-128位
    * taskStatus  **参数解释**： 导出任务状态 **取值范围**： - success：成功 - failure：失败 - running：运行中
    * fileId  **参数解释**： 文件ID **取值范围**： 字符长度1-64位
    * fileName  **参数解释**： 文件名 **取值范围**： 字符长度1-255位
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'taskStatus' => 'getTaskStatus',
            'fileId' => 'getFileId',
            'fileName' => 'getFileName'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 255)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
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
    * Gets taskId
    *  **参数解释**： 任务ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**： 任务ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**： 任务名称 **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName **参数解释**： 任务名称 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskStatus
    *  **参数解释**： 导出任务状态 **取值范围**： - success：成功 - failure：失败 - running：运行中
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus **参数解释**： 导出任务状态 **取值范围**： - success：成功 - failure：失败 - running：运行中
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets fileId
    *  **参数解释**： 文件ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
    * Sets fileId
    *
    * @param string|null $fileId **参数解释**： 文件ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;
        return $this;
    }

    /**
    * Gets fileName
    *  **参数解释**： 文件名 **取值范围**： 字符长度1-255位
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName **参数解释**： 文件名 **取值范围**： 字符长度1-255位
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
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

