<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlertRspProcess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlertRsp_process';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processName  The name, display only
    * processPath  The name, display only
    * processPid  Id value
    * processUid  Id value
    * processCmdline  The name, display only
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processName' => 'string',
            'processPath' => 'string',
            'processPid' => 'int',
            'processUid' => 'int',
            'processCmdline' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processName  The name, display only
    * processPath  The name, display only
    * processPid  Id value
    * processUid  Id value
    * processCmdline  The name, display only
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processName' => null,
        'processPath' => null,
        'processPid' => null,
        'processUid' => null,
        'processCmdline' => null
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
    * processName  The name, display only
    * processPath  The name, display only
    * processPid  Id value
    * processUid  Id value
    * processCmdline  The name, display only
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processName' => 'process_name',
            'processPath' => 'process_path',
            'processPid' => 'process_pid',
            'processUid' => 'process_uid',
            'processCmdline' => 'process_cmdline'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processName  The name, display only
    * processPath  The name, display only
    * processPid  Id value
    * processUid  Id value
    * processCmdline  The name, display only
    *
    * @var string[]
    */
    protected static $setters = [
            'processName' => 'setProcessName',
            'processPath' => 'setProcessPath',
            'processPid' => 'setProcessPid',
            'processUid' => 'setProcessUid',
            'processCmdline' => 'setProcessCmdline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processName  The name, display only
    * processPath  The name, display only
    * processPid  Id value
    * processUid  Id value
    * processCmdline  The name, display only
    *
    * @var string[]
    */
    protected static $getters = [
            'processName' => 'getProcessName',
            'processPath' => 'getProcessPath',
            'processPid' => 'getProcessPid',
            'processUid' => 'getProcessUid',
            'processCmdline' => 'getProcessCmdline'
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
        $this->container['processName'] = isset($data['processName']) ? $data['processName'] : null;
        $this->container['processPath'] = isset($data['processPath']) ? $data['processPath'] : null;
        $this->container['processPid'] = isset($data['processPid']) ? $data['processPid'] : null;
        $this->container['processUid'] = isset($data['processUid']) ? $data['processUid'] : null;
        $this->container['processCmdline'] = isset($data['processCmdline']) ? $data['processCmdline'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) < 0)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] > 65535)) {
                $invalidProperties[] = "invalid value for 'processPid', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processUid']) && ($this->container['processUid'] > 65535)) {
                $invalidProperties[] = "invalid value for 'processUid', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['processUid']) && ($this->container['processUid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processUid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processCmdline']) && (mb_strlen($this->container['processCmdline']) > 1024)) {
                $invalidProperties[] = "invalid value for 'processCmdline', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['processCmdline']) && (mb_strlen($this->container['processCmdline']) < 0)) {
                $invalidProperties[] = "invalid value for 'processCmdline', the character length must be bigger than or equal to 0.";
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
    * Gets processName
    *  The name, display only
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
    * @param string|null $processName The name, display only
    *
    * @return $this
    */
    public function setProcessName($processName)
    {
        $this->container['processName'] = $processName;
        return $this;
    }

    /**
    * Gets processPath
    *  The name, display only
    *
    * @return string|null
    */
    public function getProcessPath()
    {
        return $this->container['processPath'];
    }

    /**
    * Sets processPath
    *
    * @param string|null $processPath The name, display only
    *
    * @return $this
    */
    public function setProcessPath($processPath)
    {
        $this->container['processPath'] = $processPath;
        return $this;
    }

    /**
    * Gets processPid
    *  Id value
    *
    * @return int|null
    */
    public function getProcessPid()
    {
        return $this->container['processPid'];
    }

    /**
    * Sets processPid
    *
    * @param int|null $processPid Id value
    *
    * @return $this
    */
    public function setProcessPid($processPid)
    {
        $this->container['processPid'] = $processPid;
        return $this;
    }

    /**
    * Gets processUid
    *  Id value
    *
    * @return int|null
    */
    public function getProcessUid()
    {
        return $this->container['processUid'];
    }

    /**
    * Sets processUid
    *
    * @param int|null $processUid Id value
    *
    * @return $this
    */
    public function setProcessUid($processUid)
    {
        $this->container['processUid'] = $processUid;
        return $this;
    }

    /**
    * Gets processCmdline
    *  The name, display only
    *
    * @return string|null
    */
    public function getProcessCmdline()
    {
        return $this->container['processCmdline'];
    }

    /**
    * Sets processCmdline
    *
    * @param string|null $processCmdline The name, display only
    *
    * @return $this
    */
    public function setProcessCmdline($processCmdline)
    {
        $this->container['processCmdline'] = $processCmdline;
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

