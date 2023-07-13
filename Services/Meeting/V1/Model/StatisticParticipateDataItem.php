<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticParticipateDataItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticParticipateDataItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  日期/月份。
    * confUserName  与会用户名称。 category = user_participate_info时有效。
    * confUserAccount  与会用户账户。 category = user_participate_info时有效。
    * confUserDeptName  与会用户所属部门。 category = user_participate_info时有效。
    * confUserCount  用户与会数。 category = user_participate_info时有效。
    * confUserDuration  用户与会时长(秒)。 category = user_participate_info时有效。
    * confHardTerminalName  与会硬件终端名称。 category = hard_terminal_participate_info时有效。
    * confHardTerminalModel  与会硬件终端型号。 category = hard_terminal_participate_info时有效。
    * confHardTerminalUserId  与会硬件终端的用户ID。 category = hard_terminal_participate_info时有效。
    * confHardTerminalCount  硬件终端与会数。 category = hard_terminal_participate_info时有效。
    * confHardTerminalDuration  硬件终端与会时长(秒)。 category = hard_terminal_participate_info时有效。
    * deviceType  与会设备类型。 category = participant_type_info时有效。
    * deviceVersion  与会设备版本。 category = participant_type_info时有效。
    * deviceAttendanceCount  设备与会数。 category = participant_type_info时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'confUserName' => 'string',
            'confUserAccount' => 'string',
            'confUserDeptName' => 'string',
            'confUserCount' => 'string',
            'confUserDuration' => 'string',
            'confHardTerminalName' => 'string',
            'confHardTerminalModel' => 'string',
            'confHardTerminalUserId' => 'string',
            'confHardTerminalCount' => 'string',
            'confHardTerminalDuration' => 'string',
            'deviceType' => 'string',
            'deviceVersion' => 'string',
            'deviceAttendanceCount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  日期/月份。
    * confUserName  与会用户名称。 category = user_participate_info时有效。
    * confUserAccount  与会用户账户。 category = user_participate_info时有效。
    * confUserDeptName  与会用户所属部门。 category = user_participate_info时有效。
    * confUserCount  用户与会数。 category = user_participate_info时有效。
    * confUserDuration  用户与会时长(秒)。 category = user_participate_info时有效。
    * confHardTerminalName  与会硬件终端名称。 category = hard_terminal_participate_info时有效。
    * confHardTerminalModel  与会硬件终端型号。 category = hard_terminal_participate_info时有效。
    * confHardTerminalUserId  与会硬件终端的用户ID。 category = hard_terminal_participate_info时有效。
    * confHardTerminalCount  硬件终端与会数。 category = hard_terminal_participate_info时有效。
    * confHardTerminalDuration  硬件终端与会时长(秒)。 category = hard_terminal_participate_info时有效。
    * deviceType  与会设备类型。 category = participant_type_info时有效。
    * deviceVersion  与会设备版本。 category = participant_type_info时有效。
    * deviceAttendanceCount  设备与会数。 category = participant_type_info时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'confUserName' => null,
        'confUserAccount' => null,
        'confUserDeptName' => null,
        'confUserCount' => null,
        'confUserDuration' => null,
        'confHardTerminalName' => null,
        'confHardTerminalModel' => null,
        'confHardTerminalUserId' => null,
        'confHardTerminalCount' => null,
        'confHardTerminalDuration' => null,
        'deviceType' => null,
        'deviceVersion' => null,
        'deviceAttendanceCount' => null
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
    * time  日期/月份。
    * confUserName  与会用户名称。 category = user_participate_info时有效。
    * confUserAccount  与会用户账户。 category = user_participate_info时有效。
    * confUserDeptName  与会用户所属部门。 category = user_participate_info时有效。
    * confUserCount  用户与会数。 category = user_participate_info时有效。
    * confUserDuration  用户与会时长(秒)。 category = user_participate_info时有效。
    * confHardTerminalName  与会硬件终端名称。 category = hard_terminal_participate_info时有效。
    * confHardTerminalModel  与会硬件终端型号。 category = hard_terminal_participate_info时有效。
    * confHardTerminalUserId  与会硬件终端的用户ID。 category = hard_terminal_participate_info时有效。
    * confHardTerminalCount  硬件终端与会数。 category = hard_terminal_participate_info时有效。
    * confHardTerminalDuration  硬件终端与会时长(秒)。 category = hard_terminal_participate_info时有效。
    * deviceType  与会设备类型。 category = participant_type_info时有效。
    * deviceVersion  与会设备版本。 category = participant_type_info时有效。
    * deviceAttendanceCount  设备与会数。 category = participant_type_info时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'confUserName' => 'confUserName',
            'confUserAccount' => 'confUserAccount',
            'confUserDeptName' => 'confUserDeptName',
            'confUserCount' => 'confUserCount',
            'confUserDuration' => 'confUserDuration',
            'confHardTerminalName' => 'confHardTerminalName',
            'confHardTerminalModel' => 'confHardTerminalModel',
            'confHardTerminalUserId' => 'confHardTerminalUserId',
            'confHardTerminalCount' => 'confHardTerminalCount',
            'confHardTerminalDuration' => 'confHardTerminalDuration',
            'deviceType' => 'deviceType',
            'deviceVersion' => 'deviceVersion',
            'deviceAttendanceCount' => 'deviceAttendanceCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  日期/月份。
    * confUserName  与会用户名称。 category = user_participate_info时有效。
    * confUserAccount  与会用户账户。 category = user_participate_info时有效。
    * confUserDeptName  与会用户所属部门。 category = user_participate_info时有效。
    * confUserCount  用户与会数。 category = user_participate_info时有效。
    * confUserDuration  用户与会时长(秒)。 category = user_participate_info时有效。
    * confHardTerminalName  与会硬件终端名称。 category = hard_terminal_participate_info时有效。
    * confHardTerminalModel  与会硬件终端型号。 category = hard_terminal_participate_info时有效。
    * confHardTerminalUserId  与会硬件终端的用户ID。 category = hard_terminal_participate_info时有效。
    * confHardTerminalCount  硬件终端与会数。 category = hard_terminal_participate_info时有效。
    * confHardTerminalDuration  硬件终端与会时长(秒)。 category = hard_terminal_participate_info时有效。
    * deviceType  与会设备类型。 category = participant_type_info时有效。
    * deviceVersion  与会设备版本。 category = participant_type_info时有效。
    * deviceAttendanceCount  设备与会数。 category = participant_type_info时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'confUserName' => 'setConfUserName',
            'confUserAccount' => 'setConfUserAccount',
            'confUserDeptName' => 'setConfUserDeptName',
            'confUserCount' => 'setConfUserCount',
            'confUserDuration' => 'setConfUserDuration',
            'confHardTerminalName' => 'setConfHardTerminalName',
            'confHardTerminalModel' => 'setConfHardTerminalModel',
            'confHardTerminalUserId' => 'setConfHardTerminalUserId',
            'confHardTerminalCount' => 'setConfHardTerminalCount',
            'confHardTerminalDuration' => 'setConfHardTerminalDuration',
            'deviceType' => 'setDeviceType',
            'deviceVersion' => 'setDeviceVersion',
            'deviceAttendanceCount' => 'setDeviceAttendanceCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  日期/月份。
    * confUserName  与会用户名称。 category = user_participate_info时有效。
    * confUserAccount  与会用户账户。 category = user_participate_info时有效。
    * confUserDeptName  与会用户所属部门。 category = user_participate_info时有效。
    * confUserCount  用户与会数。 category = user_participate_info时有效。
    * confUserDuration  用户与会时长(秒)。 category = user_participate_info时有效。
    * confHardTerminalName  与会硬件终端名称。 category = hard_terminal_participate_info时有效。
    * confHardTerminalModel  与会硬件终端型号。 category = hard_terminal_participate_info时有效。
    * confHardTerminalUserId  与会硬件终端的用户ID。 category = hard_terminal_participate_info时有效。
    * confHardTerminalCount  硬件终端与会数。 category = hard_terminal_participate_info时有效。
    * confHardTerminalDuration  硬件终端与会时长(秒)。 category = hard_terminal_participate_info时有效。
    * deviceType  与会设备类型。 category = participant_type_info时有效。
    * deviceVersion  与会设备版本。 category = participant_type_info时有效。
    * deviceAttendanceCount  设备与会数。 category = participant_type_info时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'confUserName' => 'getConfUserName',
            'confUserAccount' => 'getConfUserAccount',
            'confUserDeptName' => 'getConfUserDeptName',
            'confUserCount' => 'getConfUserCount',
            'confUserDuration' => 'getConfUserDuration',
            'confHardTerminalName' => 'getConfHardTerminalName',
            'confHardTerminalModel' => 'getConfHardTerminalModel',
            'confHardTerminalUserId' => 'getConfHardTerminalUserId',
            'confHardTerminalCount' => 'getConfHardTerminalCount',
            'confHardTerminalDuration' => 'getConfHardTerminalDuration',
            'deviceType' => 'getDeviceType',
            'deviceVersion' => 'getDeviceVersion',
            'deviceAttendanceCount' => 'getDeviceAttendanceCount'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['confUserName'] = isset($data['confUserName']) ? $data['confUserName'] : null;
        $this->container['confUserAccount'] = isset($data['confUserAccount']) ? $data['confUserAccount'] : null;
        $this->container['confUserDeptName'] = isset($data['confUserDeptName']) ? $data['confUserDeptName'] : null;
        $this->container['confUserCount'] = isset($data['confUserCount']) ? $data['confUserCount'] : null;
        $this->container['confUserDuration'] = isset($data['confUserDuration']) ? $data['confUserDuration'] : null;
        $this->container['confHardTerminalName'] = isset($data['confHardTerminalName']) ? $data['confHardTerminalName'] : null;
        $this->container['confHardTerminalModel'] = isset($data['confHardTerminalModel']) ? $data['confHardTerminalModel'] : null;
        $this->container['confHardTerminalUserId'] = isset($data['confHardTerminalUserId']) ? $data['confHardTerminalUserId'] : null;
        $this->container['confHardTerminalCount'] = isset($data['confHardTerminalCount']) ? $data['confHardTerminalCount'] : null;
        $this->container['confHardTerminalDuration'] = isset($data['confHardTerminalDuration']) ? $data['confHardTerminalDuration'] : null;
        $this->container['deviceType'] = isset($data['deviceType']) ? $data['deviceType'] : null;
        $this->container['deviceVersion'] = isset($data['deviceVersion']) ? $data['deviceVersion'] : null;
        $this->container['deviceAttendanceCount'] = isset($data['deviceAttendanceCount']) ? $data['deviceAttendanceCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) > 128)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) < 1)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confUserName']) && (mb_strlen($this->container['confUserName']) > 128)) {
                $invalidProperties[] = "invalid value for 'confUserName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confUserName']) && (mb_strlen($this->container['confUserName']) < 1)) {
                $invalidProperties[] = "invalid value for 'confUserName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confUserAccount']) && (mb_strlen($this->container['confUserAccount']) > 128)) {
                $invalidProperties[] = "invalid value for 'confUserAccount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confUserAccount']) && (mb_strlen($this->container['confUserAccount']) < 1)) {
                $invalidProperties[] = "invalid value for 'confUserAccount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confUserDeptName']) && (mb_strlen($this->container['confUserDeptName']) > 128)) {
                $invalidProperties[] = "invalid value for 'confUserDeptName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confUserDeptName']) && (mb_strlen($this->container['confUserDeptName']) < 1)) {
                $invalidProperties[] = "invalid value for 'confUserDeptName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confUserCount']) && (mb_strlen($this->container['confUserCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'confUserCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confUserCount']) && (mb_strlen($this->container['confUserCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'confUserCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confUserDuration']) && (mb_strlen($this->container['confUserDuration']) > 128)) {
                $invalidProperties[] = "invalid value for 'confUserDuration', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confUserDuration']) && (mb_strlen($this->container['confUserDuration']) < 1)) {
                $invalidProperties[] = "invalid value for 'confUserDuration', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confHardTerminalName']) && (mb_strlen($this->container['confHardTerminalName']) > 128)) {
                $invalidProperties[] = "invalid value for 'confHardTerminalName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confHardTerminalName']) && (mb_strlen($this->container['confHardTerminalName']) < 1)) {
                $invalidProperties[] = "invalid value for 'confHardTerminalName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confHardTerminalModel']) && (mb_strlen($this->container['confHardTerminalModel']) > 128)) {
                $invalidProperties[] = "invalid value for 'confHardTerminalModel', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confHardTerminalModel']) && (mb_strlen($this->container['confHardTerminalModel']) < 1)) {
                $invalidProperties[] = "invalid value for 'confHardTerminalModel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confHardTerminalUserId']) && (mb_strlen($this->container['confHardTerminalUserId']) > 128)) {
                $invalidProperties[] = "invalid value for 'confHardTerminalUserId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confHardTerminalUserId']) && (mb_strlen($this->container['confHardTerminalUserId']) < 1)) {
                $invalidProperties[] = "invalid value for 'confHardTerminalUserId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confHardTerminalCount']) && (mb_strlen($this->container['confHardTerminalCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'confHardTerminalCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confHardTerminalCount']) && (mb_strlen($this->container['confHardTerminalCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'confHardTerminalCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confHardTerminalDuration']) && (mb_strlen($this->container['confHardTerminalDuration']) > 128)) {
                $invalidProperties[] = "invalid value for 'confHardTerminalDuration', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confHardTerminalDuration']) && (mb_strlen($this->container['confHardTerminalDuration']) < 1)) {
                $invalidProperties[] = "invalid value for 'confHardTerminalDuration', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['deviceType']) && (mb_strlen($this->container['deviceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'deviceType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['deviceType']) && (mb_strlen($this->container['deviceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'deviceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['deviceVersion']) && (mb_strlen($this->container['deviceVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'deviceVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['deviceVersion']) && (mb_strlen($this->container['deviceVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'deviceVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['deviceAttendanceCount']) && (mb_strlen($this->container['deviceAttendanceCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'deviceAttendanceCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['deviceAttendanceCount']) && (mb_strlen($this->container['deviceAttendanceCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'deviceAttendanceCount', the character length must be bigger than or equal to 1.";
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
    * Gets time
    *  日期/月份。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 日期/月份。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets confUserName
    *  与会用户名称。 category = user_participate_info时有效。
    *
    * @return string|null
    */
    public function getConfUserName()
    {
        return $this->container['confUserName'];
    }

    /**
    * Sets confUserName
    *
    * @param string|null $confUserName 与会用户名称。 category = user_participate_info时有效。
    *
    * @return $this
    */
    public function setConfUserName($confUserName)
    {
        $this->container['confUserName'] = $confUserName;
        return $this;
    }

    /**
    * Gets confUserAccount
    *  与会用户账户。 category = user_participate_info时有效。
    *
    * @return string|null
    */
    public function getConfUserAccount()
    {
        return $this->container['confUserAccount'];
    }

    /**
    * Sets confUserAccount
    *
    * @param string|null $confUserAccount 与会用户账户。 category = user_participate_info时有效。
    *
    * @return $this
    */
    public function setConfUserAccount($confUserAccount)
    {
        $this->container['confUserAccount'] = $confUserAccount;
        return $this;
    }

    /**
    * Gets confUserDeptName
    *  与会用户所属部门。 category = user_participate_info时有效。
    *
    * @return string|null
    */
    public function getConfUserDeptName()
    {
        return $this->container['confUserDeptName'];
    }

    /**
    * Sets confUserDeptName
    *
    * @param string|null $confUserDeptName 与会用户所属部门。 category = user_participate_info时有效。
    *
    * @return $this
    */
    public function setConfUserDeptName($confUserDeptName)
    {
        $this->container['confUserDeptName'] = $confUserDeptName;
        return $this;
    }

    /**
    * Gets confUserCount
    *  用户与会数。 category = user_participate_info时有效。
    *
    * @return string|null
    */
    public function getConfUserCount()
    {
        return $this->container['confUserCount'];
    }

    /**
    * Sets confUserCount
    *
    * @param string|null $confUserCount 用户与会数。 category = user_participate_info时有效。
    *
    * @return $this
    */
    public function setConfUserCount($confUserCount)
    {
        $this->container['confUserCount'] = $confUserCount;
        return $this;
    }

    /**
    * Gets confUserDuration
    *  用户与会时长(秒)。 category = user_participate_info时有效。
    *
    * @return string|null
    */
    public function getConfUserDuration()
    {
        return $this->container['confUserDuration'];
    }

    /**
    * Sets confUserDuration
    *
    * @param string|null $confUserDuration 用户与会时长(秒)。 category = user_participate_info时有效。
    *
    * @return $this
    */
    public function setConfUserDuration($confUserDuration)
    {
        $this->container['confUserDuration'] = $confUserDuration;
        return $this;
    }

    /**
    * Gets confHardTerminalName
    *  与会硬件终端名称。 category = hard_terminal_participate_info时有效。
    *
    * @return string|null
    */
    public function getConfHardTerminalName()
    {
        return $this->container['confHardTerminalName'];
    }

    /**
    * Sets confHardTerminalName
    *
    * @param string|null $confHardTerminalName 与会硬件终端名称。 category = hard_terminal_participate_info时有效。
    *
    * @return $this
    */
    public function setConfHardTerminalName($confHardTerminalName)
    {
        $this->container['confHardTerminalName'] = $confHardTerminalName;
        return $this;
    }

    /**
    * Gets confHardTerminalModel
    *  与会硬件终端型号。 category = hard_terminal_participate_info时有效。
    *
    * @return string|null
    */
    public function getConfHardTerminalModel()
    {
        return $this->container['confHardTerminalModel'];
    }

    /**
    * Sets confHardTerminalModel
    *
    * @param string|null $confHardTerminalModel 与会硬件终端型号。 category = hard_terminal_participate_info时有效。
    *
    * @return $this
    */
    public function setConfHardTerminalModel($confHardTerminalModel)
    {
        $this->container['confHardTerminalModel'] = $confHardTerminalModel;
        return $this;
    }

    /**
    * Gets confHardTerminalUserId
    *  与会硬件终端的用户ID。 category = hard_terminal_participate_info时有效。
    *
    * @return string|null
    */
    public function getConfHardTerminalUserId()
    {
        return $this->container['confHardTerminalUserId'];
    }

    /**
    * Sets confHardTerminalUserId
    *
    * @param string|null $confHardTerminalUserId 与会硬件终端的用户ID。 category = hard_terminal_participate_info时有效。
    *
    * @return $this
    */
    public function setConfHardTerminalUserId($confHardTerminalUserId)
    {
        $this->container['confHardTerminalUserId'] = $confHardTerminalUserId;
        return $this;
    }

    /**
    * Gets confHardTerminalCount
    *  硬件终端与会数。 category = hard_terminal_participate_info时有效。
    *
    * @return string|null
    */
    public function getConfHardTerminalCount()
    {
        return $this->container['confHardTerminalCount'];
    }

    /**
    * Sets confHardTerminalCount
    *
    * @param string|null $confHardTerminalCount 硬件终端与会数。 category = hard_terminal_participate_info时有效。
    *
    * @return $this
    */
    public function setConfHardTerminalCount($confHardTerminalCount)
    {
        $this->container['confHardTerminalCount'] = $confHardTerminalCount;
        return $this;
    }

    /**
    * Gets confHardTerminalDuration
    *  硬件终端与会时长(秒)。 category = hard_terminal_participate_info时有效。
    *
    * @return string|null
    */
    public function getConfHardTerminalDuration()
    {
        return $this->container['confHardTerminalDuration'];
    }

    /**
    * Sets confHardTerminalDuration
    *
    * @param string|null $confHardTerminalDuration 硬件终端与会时长(秒)。 category = hard_terminal_participate_info时有效。
    *
    * @return $this
    */
    public function setConfHardTerminalDuration($confHardTerminalDuration)
    {
        $this->container['confHardTerminalDuration'] = $confHardTerminalDuration;
        return $this;
    }

    /**
    * Gets deviceType
    *  与会设备类型。 category = participant_type_info时有效。
    *
    * @return string|null
    */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
    * Sets deviceType
    *
    * @param string|null $deviceType 与会设备类型。 category = participant_type_info时有效。
    *
    * @return $this
    */
    public function setDeviceType($deviceType)
    {
        $this->container['deviceType'] = $deviceType;
        return $this;
    }

    /**
    * Gets deviceVersion
    *  与会设备版本。 category = participant_type_info时有效。
    *
    * @return string|null
    */
    public function getDeviceVersion()
    {
        return $this->container['deviceVersion'];
    }

    /**
    * Sets deviceVersion
    *
    * @param string|null $deviceVersion 与会设备版本。 category = participant_type_info时有效。
    *
    * @return $this
    */
    public function setDeviceVersion($deviceVersion)
    {
        $this->container['deviceVersion'] = $deviceVersion;
        return $this;
    }

    /**
    * Gets deviceAttendanceCount
    *  设备与会数。 category = participant_type_info时有效。
    *
    * @return string|null
    */
    public function getDeviceAttendanceCount()
    {
        return $this->container['deviceAttendanceCount'];
    }

    /**
    * Sets deviceAttendanceCount
    *
    * @param string|null $deviceAttendanceCount 设备与会数。 category = participant_type_info时有效。
    *
    * @return $this
    */
    public function setDeviceAttendanceCount($deviceAttendanceCount)
    {
        $this->container['deviceAttendanceCount'] = $deviceAttendanceCount;
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

