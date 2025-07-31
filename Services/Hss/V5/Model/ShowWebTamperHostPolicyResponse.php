<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWebTamperHostPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWebTamperHostPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectDirNum  防护目录数
    * protectDirInfo  protectDirInfo
    * enableTimingOff  定时开关状态
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  动态网页防篡改开启状态
    * raspPath  rasp path
    * enablePrivilegedProcess  特权进程状态
    * privilegedChildStatus  特权进程子进程可信状态
    * privilegedProcessPathList  特权进程路径集合
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectDirNum' => 'int',
            'protectDirInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WtpProtectDirResponseInfo',
            'enableTimingOff' => 'bool',
            'timingOffConfigInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ListTimingOffConfigInfoResponseInfo',
            'enableRaspProtect' => 'bool',
            'raspPath' => 'string',
            'enablePrivilegedProcess' => 'bool',
            'privilegedChildStatus' => 'bool',
            'privilegedProcessPathList' => 'string[]',
            'privilegedProcessInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ListPrivilegedProcessResponseInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectDirNum  防护目录数
    * protectDirInfo  protectDirInfo
    * enableTimingOff  定时开关状态
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  动态网页防篡改开启状态
    * raspPath  rasp path
    * enablePrivilegedProcess  特权进程状态
    * privilegedChildStatus  特权进程子进程可信状态
    * privilegedProcessPathList  特权进程路径集合
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectDirNum' => 'int32',
        'protectDirInfo' => null,
        'enableTimingOff' => null,
        'timingOffConfigInfo' => null,
        'enableRaspProtect' => null,
        'raspPath' => null,
        'enablePrivilegedProcess' => null,
        'privilegedChildStatus' => null,
        'privilegedProcessPathList' => null,
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
    * protectDirNum  防护目录数
    * protectDirInfo  protectDirInfo
    * enableTimingOff  定时开关状态
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  动态网页防篡改开启状态
    * raspPath  rasp path
    * enablePrivilegedProcess  特权进程状态
    * privilegedChildStatus  特权进程子进程可信状态
    * privilegedProcessPathList  特权进程路径集合
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectDirNum' => 'protect_dir_num',
            'protectDirInfo' => 'protect_dir_info',
            'enableTimingOff' => 'enable_timing_off',
            'timingOffConfigInfo' => 'timing_off_config_info',
            'enableRaspProtect' => 'enable_rasp_protect',
            'raspPath' => 'rasp_path',
            'enablePrivilegedProcess' => 'enable_privileged_process',
            'privilegedChildStatus' => 'privileged_child_status',
            'privilegedProcessPathList' => 'privileged_process_path_list',
            'privilegedProcessInfo' => 'privileged_process_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectDirNum  防护目录数
    * protectDirInfo  protectDirInfo
    * enableTimingOff  定时开关状态
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  动态网页防篡改开启状态
    * raspPath  rasp path
    * enablePrivilegedProcess  特权进程状态
    * privilegedChildStatus  特权进程子进程可信状态
    * privilegedProcessPathList  特权进程路径集合
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'protectDirNum' => 'setProtectDirNum',
            'protectDirInfo' => 'setProtectDirInfo',
            'enableTimingOff' => 'setEnableTimingOff',
            'timingOffConfigInfo' => 'setTimingOffConfigInfo',
            'enableRaspProtect' => 'setEnableRaspProtect',
            'raspPath' => 'setRaspPath',
            'enablePrivilegedProcess' => 'setEnablePrivilegedProcess',
            'privilegedChildStatus' => 'setPrivilegedChildStatus',
            'privilegedProcessPathList' => 'setPrivilegedProcessPathList',
            'privilegedProcessInfo' => 'setPrivilegedProcessInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectDirNum  防护目录数
    * protectDirInfo  protectDirInfo
    * enableTimingOff  定时开关状态
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  动态网页防篡改开启状态
    * raspPath  rasp path
    * enablePrivilegedProcess  特权进程状态
    * privilegedChildStatus  特权进程子进程可信状态
    * privilegedProcessPathList  特权进程路径集合
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'protectDirNum' => 'getProtectDirNum',
            'protectDirInfo' => 'getProtectDirInfo',
            'enableTimingOff' => 'getEnableTimingOff',
            'timingOffConfigInfo' => 'getTimingOffConfigInfo',
            'enableRaspProtect' => 'getEnableRaspProtect',
            'raspPath' => 'getRaspPath',
            'enablePrivilegedProcess' => 'getEnablePrivilegedProcess',
            'privilegedChildStatus' => 'getPrivilegedChildStatus',
            'privilegedProcessPathList' => 'getPrivilegedProcessPathList',
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
        $this->container['protectDirNum'] = isset($data['protectDirNum']) ? $data['protectDirNum'] : null;
        $this->container['protectDirInfo'] = isset($data['protectDirInfo']) ? $data['protectDirInfo'] : null;
        $this->container['enableTimingOff'] = isset($data['enableTimingOff']) ? $data['enableTimingOff'] : null;
        $this->container['timingOffConfigInfo'] = isset($data['timingOffConfigInfo']) ? $data['timingOffConfigInfo'] : null;
        $this->container['enableRaspProtect'] = isset($data['enableRaspProtect']) ? $data['enableRaspProtect'] : null;
        $this->container['raspPath'] = isset($data['raspPath']) ? $data['raspPath'] : null;
        $this->container['enablePrivilegedProcess'] = isset($data['enablePrivilegedProcess']) ? $data['enablePrivilegedProcess'] : null;
        $this->container['privilegedChildStatus'] = isset($data['privilegedChildStatus']) ? $data['privilegedChildStatus'] : null;
        $this->container['privilegedProcessPathList'] = isset($data['privilegedProcessPathList']) ? $data['privilegedProcessPathList'] : null;
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
            if (!is_null($this->container['protectDirNum']) && ($this->container['protectDirNum'] > 50)) {
                $invalidProperties[] = "invalid value for 'protectDirNum', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['protectDirNum']) && ($this->container['protectDirNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectDirNum', must be bigger than or equal to 0.";
            }
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
    * Gets protectDirNum
    *  防护目录数
    *
    * @return int|null
    */
    public function getProtectDirNum()
    {
        return $this->container['protectDirNum'];
    }

    /**
    * Sets protectDirNum
    *
    * @param int|null $protectDirNum 防护目录数
    *
    * @return $this
    */
    public function setProtectDirNum($protectDirNum)
    {
        $this->container['protectDirNum'] = $protectDirNum;
        return $this;
    }

    /**
    * Gets protectDirInfo
    *  protectDirInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WtpProtectDirResponseInfo|null
    */
    public function getProtectDirInfo()
    {
        return $this->container['protectDirInfo'];
    }

    /**
    * Sets protectDirInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WtpProtectDirResponseInfo|null $protectDirInfo protectDirInfo
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
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListTimingOffConfigInfoResponseInfo|null
    */
    public function getTimingOffConfigInfo()
    {
        return $this->container['timingOffConfigInfo'];
    }

    /**
    * Sets timingOffConfigInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListTimingOffConfigInfoResponseInfo|null $timingOffConfigInfo timingOffConfigInfo
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
    * Gets privilegedChildStatus
    *  特权进程子进程可信状态
    *
    * @return bool|null
    */
    public function getPrivilegedChildStatus()
    {
        return $this->container['privilegedChildStatus'];
    }

    /**
    * Sets privilegedChildStatus
    *
    * @param bool|null $privilegedChildStatus 特权进程子进程可信状态
    *
    * @return $this
    */
    public function setPrivilegedChildStatus($privilegedChildStatus)
    {
        $this->container['privilegedChildStatus'] = $privilegedChildStatus;
        return $this;
    }

    /**
    * Gets privilegedProcessPathList
    *  特权进程路径集合
    *
    * @return string[]|null
    */
    public function getPrivilegedProcessPathList()
    {
        return $this->container['privilegedProcessPathList'];
    }

    /**
    * Sets privilegedProcessPathList
    *
    * @param string[]|null $privilegedProcessPathList 特权进程路径集合
    *
    * @return $this
    */
    public function setPrivilegedProcessPathList($privilegedProcessPathList)
    {
        $this->container['privilegedProcessPathList'] = $privilegedProcessPathList;
        return $this;
    }

    /**
    * Gets privilegedProcessInfo
    *  privilegedProcessInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListPrivilegedProcessResponseInfo|null
    */
    public function getPrivilegedProcessInfo()
    {
        return $this->container['privilegedProcessInfo'];
    }

    /**
    * Sets privilegedProcessInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListPrivilegedProcessResponseInfo|null $privilegedProcessInfo privilegedProcessInfo
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

