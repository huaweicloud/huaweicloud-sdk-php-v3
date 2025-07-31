<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateWebTamperHostPolicyRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateWebTamperHostPolicyRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectDirInfo  protectDirInfo
    * enableTimingOff  定时开关状态
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  动态网页防篡改开启状态
    * raspPath  rasp path
    * enablePrivilegedProcess  特权进程状态
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectDirInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectDirRequestInfo',
            'enableTimingOff' => 'bool',
            'timingOffConfigInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperTimingOffConfigInfoRequestInfo',
            'enableRaspProtect' => 'bool',
            'raspPath' => 'string',
            'enablePrivilegedProcess' => 'bool',
            'privilegedProcessInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperPrivilegedProcessRequestInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectDirInfo  protectDirInfo
    * enableTimingOff  定时开关状态
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  动态网页防篡改开启状态
    * raspPath  rasp path
    * enablePrivilegedProcess  特权进程状态
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectDirInfo' => null,
        'enableTimingOff' => null,
        'timingOffConfigInfo' => null,
        'enableRaspProtect' => null,
        'raspPath' => null,
        'enablePrivilegedProcess' => null,
        'privilegedProcessInfo' => null
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
    * protectDirInfo  protectDirInfo
    * enableTimingOff  定时开关状态
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  动态网页防篡改开启状态
    * raspPath  rasp path
    * enablePrivilegedProcess  特权进程状态
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectDirInfo' => 'protect_dir_info',
            'enableTimingOff' => 'enable_timing_off',
            'timingOffConfigInfo' => 'timing_off_config_info',
            'enableRaspProtect' => 'enable_rasp_protect',
            'raspPath' => 'rasp_path',
            'enablePrivilegedProcess' => 'enable_privileged_process',
            'privilegedProcessInfo' => 'privileged_process_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectDirInfo  protectDirInfo
    * enableTimingOff  定时开关状态
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  动态网页防篡改开启状态
    * raspPath  rasp path
    * enablePrivilegedProcess  特权进程状态
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'protectDirInfo' => 'setProtectDirInfo',
            'enableTimingOff' => 'setEnableTimingOff',
            'timingOffConfigInfo' => 'setTimingOffConfigInfo',
            'enableRaspProtect' => 'setEnableRaspProtect',
            'raspPath' => 'setRaspPath',
            'enablePrivilegedProcess' => 'setEnablePrivilegedProcess',
            'privilegedProcessInfo' => 'setPrivilegedProcessInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectDirInfo  protectDirInfo
    * enableTimingOff  定时开关状态
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  动态网页防篡改开启状态
    * raspPath  rasp path
    * enablePrivilegedProcess  特权进程状态
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'protectDirInfo' => 'getProtectDirInfo',
            'enableTimingOff' => 'getEnableTimingOff',
            'timingOffConfigInfo' => 'getTimingOffConfigInfo',
            'enableRaspProtect' => 'getEnableRaspProtect',
            'raspPath' => 'getRaspPath',
            'enablePrivilegedProcess' => 'getEnablePrivilegedProcess',
            'privilegedProcessInfo' => 'getPrivilegedProcessInfo'
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
        $this->container['protectDirInfo'] = isset($data['protectDirInfo']) ? $data['protectDirInfo'] : null;
        $this->container['enableTimingOff'] = isset($data['enableTimingOff']) ? $data['enableTimingOff'] : null;
        $this->container['timingOffConfigInfo'] = isset($data['timingOffConfigInfo']) ? $data['timingOffConfigInfo'] : null;
        $this->container['enableRaspProtect'] = isset($data['enableRaspProtect']) ? $data['enableRaspProtect'] : null;
        $this->container['raspPath'] = isset($data['raspPath']) ? $data['raspPath'] : null;
        $this->container['enablePrivilegedProcess'] = isset($data['enablePrivilegedProcess']) ? $data['enablePrivilegedProcess'] : null;
        $this->container['privilegedProcessInfo'] = isset($data['privilegedProcessInfo']) ? $data['privilegedProcessInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['raspPath']) && (mb_strlen($this->container['raspPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'raspPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['raspPath']) && (mb_strlen($this->container['raspPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'raspPath', the character length must be bigger than or equal to 0.";
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
    * Gets protectDirInfo
    *  protectDirInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectDirRequestInfo|null
    */
    public function getProtectDirInfo()
    {
        return $this->container['protectDirInfo'];
    }

    /**
    * Sets protectDirInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectDirRequestInfo|null $protectDirInfo protectDirInfo
    *
    * @return $this
    */
    public function setProtectDirInfo($protectDirInfo)
    {
        $this->container['protectDirInfo'] = $protectDirInfo;
        return $this;
    }

    /**
    * Gets enableTimingOff
    *  定时开关状态
    *
    * @return bool|null
    */
    public function getEnableTimingOff()
    {
        return $this->container['enableTimingOff'];
    }

    /**
    * Sets enableTimingOff
    *
    * @param bool|null $enableTimingOff 定时开关状态
    *
    * @return $this
    */
    public function setEnableTimingOff($enableTimingOff)
    {
        $this->container['enableTimingOff'] = $enableTimingOff;
        return $this;
    }

    /**
    * Gets timingOffConfigInfo
    *  timingOffConfigInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperTimingOffConfigInfoRequestInfo|null
    */
    public function getTimingOffConfigInfo()
    {
        return $this->container['timingOffConfigInfo'];
    }

    /**
    * Sets timingOffConfigInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperTimingOffConfigInfoRequestInfo|null $timingOffConfigInfo timingOffConfigInfo
    *
    * @return $this
    */
    public function setTimingOffConfigInfo($timingOffConfigInfo)
    {
        $this->container['timingOffConfigInfo'] = $timingOffConfigInfo;
        return $this;
    }

    /**
    * Gets enableRaspProtect
    *  动态网页防篡改开启状态
    *
    * @return bool|null
    */
    public function getEnableRaspProtect()
    {
        return $this->container['enableRaspProtect'];
    }

    /**
    * Sets enableRaspProtect
    *
    * @param bool|null $enableRaspProtect 动态网页防篡改开启状态
    *
    * @return $this
    */
    public function setEnableRaspProtect($enableRaspProtect)
    {
        $this->container['enableRaspProtect'] = $enableRaspProtect;
        return $this;
    }

    /**
    * Gets raspPath
    *  rasp path
    *
    * @return string|null
    */
    public function getRaspPath()
    {
        return $this->container['raspPath'];
    }

    /**
    * Sets raspPath
    *
    * @param string|null $raspPath rasp path
    *
    * @return $this
    */
    public function setRaspPath($raspPath)
    {
        $this->container['raspPath'] = $raspPath;
        return $this;
    }

    /**
    * Gets enablePrivilegedProcess
    *  特权进程状态
    *
    * @return bool|null
    */
    public function getEnablePrivilegedProcess()
    {
        return $this->container['enablePrivilegedProcess'];
    }

    /**
    * Sets enablePrivilegedProcess
    *
    * @param bool|null $enablePrivilegedProcess 特权进程状态
    *
    * @return $this
    */
    public function setEnablePrivilegedProcess($enablePrivilegedProcess)
    {
        $this->container['enablePrivilegedProcess'] = $enablePrivilegedProcess;
        return $this;
    }

    /**
    * Gets privilegedProcessInfo
    *  privilegedProcessInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperPrivilegedProcessRequestInfo|null
    */
    public function getPrivilegedProcessInfo()
    {
        return $this->container['privilegedProcessInfo'];
    }

    /**
    * Sets privilegedProcessInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperPrivilegedProcessRequestInfo|null $privilegedProcessInfo privilegedProcessInfo
    *
    * @return $this
    */
    public function setPrivilegedProcessInfo($privilegedProcessInfo)
    {
        $this->container['privilegedProcessInfo'] = $privilegedProcessInfo;
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

