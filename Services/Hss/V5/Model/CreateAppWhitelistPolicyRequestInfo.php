<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAppWhitelistPolicyRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAppWhitelistPolicyRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * autoConfirm  是否自动确认学习结果
    * hostIdList  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * dirList  **参数解释**： 监控目录列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * extList  **参数解释**： 监控文件后缀名列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyName' => 'string',
            'policyType' => 'string',
            'learningDays' => 'int',
            'specifiedDir' => 'bool',
            'intercept' => 'bool',
            'autoDetect' => 'bool',
            'autoConfirm' => 'bool',
            'hostIdList' => 'string[]',
            'dirList' => 'string[]',
            'extList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * autoConfirm  是否自动确认学习结果
    * hostIdList  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * dirList  **参数解释**： 监控目录列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * extList  **参数解释**： 监控文件后缀名列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyName' => null,
        'policyType' => null,
        'learningDays' => 'int32',
        'specifiedDir' => null,
        'intercept' => null,
        'autoDetect' => null,
        'autoConfirm' => null,
        'hostIdList' => null,
        'dirList' => null,
        'extList' => null
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
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * autoConfirm  是否自动确认学习结果
    * hostIdList  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * dirList  **参数解释**： 监控目录列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * extList  **参数解释**： 监控文件后缀名列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyName' => 'policy_name',
            'policyType' => 'policy_type',
            'learningDays' => 'learning_days',
            'specifiedDir' => 'specified_dir',
            'intercept' => 'intercept',
            'autoDetect' => 'auto_detect',
            'autoConfirm' => 'auto_confirm',
            'hostIdList' => 'host_id_list',
            'dirList' => 'dir_list',
            'extList' => 'ext_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * autoConfirm  是否自动确认学习结果
    * hostIdList  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * dirList  **参数解释**： 监控目录列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * extList  **参数解释**： 监控文件后缀名列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'policyName' => 'setPolicyName',
            'policyType' => 'setPolicyType',
            'learningDays' => 'setLearningDays',
            'specifiedDir' => 'setSpecifiedDir',
            'intercept' => 'setIntercept',
            'autoDetect' => 'setAutoDetect',
            'autoConfirm' => 'setAutoConfirm',
            'hostIdList' => 'setHostIdList',
            'dirList' => 'setDirList',
            'extList' => 'setExtList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * autoConfirm  是否自动确认学习结果
    * hostIdList  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * dirList  **参数解释**： 监控目录列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * extList  **参数解释**： 监控文件后缀名列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'policyName' => 'getPolicyName',
            'policyType' => 'getPolicyType',
            'learningDays' => 'getLearningDays',
            'specifiedDir' => 'getSpecifiedDir',
            'intercept' => 'getIntercept',
            'autoDetect' => 'getAutoDetect',
            'autoConfirm' => 'getAutoConfirm',
            'hostIdList' => 'getHostIdList',
            'dirList' => 'getDirList',
            'extList' => 'getExtList'
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['learningDays'] = isset($data['learningDays']) ? $data['learningDays'] : null;
        $this->container['specifiedDir'] = isset($data['specifiedDir']) ? $data['specifiedDir'] : null;
        $this->container['intercept'] = isset($data['intercept']) ? $data['intercept'] : null;
        $this->container['autoDetect'] = isset($data['autoDetect']) ? $data['autoDetect'] : null;
        $this->container['autoConfirm'] = isset($data['autoConfirm']) ? $data['autoConfirm'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['dirList'] = isset($data['dirList']) ? $data['dirList'] : null;
        $this->container['extList'] = isset($data['extList']) ? $data['extList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyName'] === null) {
            $invalidProperties[] = "'policyName' can't be null";
        }
            if ((mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['policyName'])) {
                $invalidProperties[] = "invalid value for 'policyName', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['policyType'] === null) {
            $invalidProperties[] = "'policyType' can't be null";
        }
            if ((mb_strlen($this->container['policyType']) > 10)) {
                $invalidProperties[] = "invalid value for 'policyType', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['policyType']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['learningDays'] === null) {
            $invalidProperties[] = "'learningDays' can't be null";
        }
            if (($this->container['learningDays'] > 1000)) {
                $invalidProperties[] = "invalid value for 'learningDays', must be smaller than or equal to 1000.";
            }
            if (($this->container['learningDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'learningDays', must be bigger than or equal to 1.";
            }
        if ($this->container['intercept'] === null) {
            $invalidProperties[] = "'intercept' can't be null";
        }
        if ($this->container['autoDetect'] === null) {
            $invalidProperties[] = "'autoDetect' can't be null";
        }
        if ($this->container['autoConfirm'] === null) {
            $invalidProperties[] = "'autoConfirm' can't be null";
        }
        if ($this->container['hostIdList'] === null) {
            $invalidProperties[] = "'hostIdList' can't be null";
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
    * Gets policyName
    *  策略名称
    *
    * @return string
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets policyType
    *  **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    *
    * @return string
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string $policyType **参数解释**： 进程白名单策略类型 **取值范围**: - block：日常运营模式
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
        return $this;
    }

    /**
    * Gets learningDays
    *  **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    *
    * @return int
    */
    public function getLearningDays()
    {
        return $this->container['learningDays'];
    }

    /**
    * Sets learningDays
    *
    * @param int $learningDays **参数解释**: 策略学习天数 **取值范围**: 最小值3，最大值30
    *
    * @return $this
    */
    public function setLearningDays($learningDays)
    {
        $this->container['learningDays'] = $learningDays;
        return $this;
    }

    /**
    * Gets specifiedDir
    *  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getSpecifiedDir()
    {
        return $this->container['specifiedDir'];
    }

    /**
    * Sets specifiedDir
    *
    * @param bool|null $specifiedDir **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSpecifiedDir($specifiedDir)
    {
        $this->container['specifiedDir'] = $specifiedDir;
        return $this;
    }

    /**
    * Gets intercept
    *  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    *
    * @return bool
    */
    public function getIntercept()
    {
        return $this->container['intercept'];
    }

    /**
    * Sets intercept
    *
    * @param bool $intercept **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setIntercept($intercept)
    {
        $this->container['intercept'] = $intercept;
        return $this;
    }

    /**
    * Gets autoDetect
    *  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    *
    * @return bool
    */
    public function getAutoDetect()
    {
        return $this->container['autoDetect'];
    }

    /**
    * Sets autoDetect
    *
    * @param bool $autoDetect **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setAutoDetect($autoDetect)
    {
        $this->container['autoDetect'] = $autoDetect;
        return $this;
    }

    /**
    * Gets autoConfirm
    *  是否自动确认学习结果
    *
    * @return bool
    */
    public function getAutoConfirm()
    {
        return $this->container['autoConfirm'];
    }

    /**
    * Sets autoConfirm
    *
    * @param bool $autoConfirm 是否自动确认学习结果
    *
    * @return $this
    */
    public function setAutoConfirm($autoConfirm)
    {
        $this->container['autoConfirm'] = $autoConfirm;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[] $hostIdList **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets dirList
    *  **参数解释**： 监控目录列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getDirList()
    {
        return $this->container['dirList'];
    }

    /**
    * Sets dirList
    *
    * @param string[]|null $dirList **参数解释**： 监控目录列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDirList($dirList)
    {
        $this->container['dirList'] = $dirList;
        return $this;
    }

    /**
    * Gets extList
    *  **参数解释**： 监控文件后缀名列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getExtList()
    {
        return $this->container['extList'];
    }

    /**
    * Sets extList
    *
    * @param string[]|null $extList **参数解释**： 监控文件后缀名列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setExtList($extList)
    {
        $this->container['extList'] = $extList;
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

