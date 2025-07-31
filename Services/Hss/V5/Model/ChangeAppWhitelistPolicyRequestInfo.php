<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeAppWhitelistPolicyRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeAppWhitelistPolicyRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型进程白名单策略类型 **取值范围**: - allow：允许指定/授权进程运行 - block：阻止潜在恶意软件运行
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值1，最大值1000
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoConfirm  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * dirList  监控目录列表
    * extList  监控文件后缀名列表
    * hostIdList  主机id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'policyName' => 'string',
            'policyType' => 'string',
            'learningDays' => 'int',
            'specifiedDir' => 'bool',
            'intercept' => 'bool',
            'autoConfirm' => 'bool',
            'autoDetect' => 'bool',
            'dirList' => 'string[]',
            'extList' => 'string[]',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型进程白名单策略类型 **取值范围**: - allow：允许指定/授权进程运行 - block：阻止潜在恶意软件运行
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值1，最大值1000
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoConfirm  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * dirList  监控目录列表
    * extList  监控文件后缀名列表
    * hostIdList  主机id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'policyName' => null,
        'policyType' => null,
        'learningDays' => 'int32',
        'specifiedDir' => null,
        'intercept' => null,
        'autoConfirm' => null,
        'autoDetect' => null,
        'dirList' => null,
        'extList' => null,
        'hostIdList' => null
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
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型进程白名单策略类型 **取值范围**: - allow：允许指定/授权进程运行 - block：阻止潜在恶意软件运行
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值1，最大值1000
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoConfirm  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * dirList  监控目录列表
    * extList  监控文件后缀名列表
    * hostIdList  主机id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'policyType' => 'policy_type',
            'learningDays' => 'learning_days',
            'specifiedDir' => 'specified_dir',
            'intercept' => 'intercept',
            'autoConfirm' => 'auto_confirm',
            'autoDetect' => 'auto_detect',
            'dirList' => 'dir_list',
            'extList' => 'ext_list',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型进程白名单策略类型 **取值范围**: - allow：允许指定/授权进程运行 - block：阻止潜在恶意软件运行
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值1，最大值1000
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoConfirm  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * dirList  监控目录列表
    * extList  监控文件后缀名列表
    * hostIdList  主机id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'policyType' => 'setPolicyType',
            'learningDays' => 'setLearningDays',
            'specifiedDir' => 'setSpecifiedDir',
            'intercept' => 'setIntercept',
            'autoConfirm' => 'setAutoConfirm',
            'autoDetect' => 'setAutoDetect',
            'dirList' => 'setDirList',
            'extList' => 'setExtList',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  策略ID
    * policyName  策略名称
    * policyType  **参数解释**： 进程白名单策略类型进程白名单策略类型 **取值范围**: - allow：允许指定/授权进程运行 - block：阻止潜在恶意软件运行
    * learningDays  **参数解释**: 策略学习天数 **取值范围**: 最小值1，最大值1000
    * specifiedDir  **参数解释**： 是否指定学习目录 **约束限制**： 不涉及 **取值范围**: - true：是 - false：否 **默认取值**： 不涉及
    * intercept  **参数解释**： 是否开启阻断 **取值范围**: - true：是 - false：否
    * autoConfirm  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    * autoDetect  **参数解释**： 是否自动开启检测 **取值范围**: - true：是 - false：否
    * dirList  监控目录列表
    * extList  监控文件后缀名列表
    * hostIdList  主机id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'policyType' => 'getPolicyType',
            'learningDays' => 'getLearningDays',
            'specifiedDir' => 'getSpecifiedDir',
            'intercept' => 'getIntercept',
            'autoConfirm' => 'getAutoConfirm',
            'autoDetect' => 'getAutoDetect',
            'dirList' => 'getDirList',
            'extList' => 'getExtList',
            'hostIdList' => 'getHostIdList'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['learningDays'] = isset($data['learningDays']) ? $data['learningDays'] : null;
        $this->container['specifiedDir'] = isset($data['specifiedDir']) ? $data['specifiedDir'] : null;
        $this->container['intercept'] = isset($data['intercept']) ? $data['intercept'] : null;
        $this->container['autoConfirm'] = isset($data['autoConfirm']) ? $data['autoConfirm'] : null;
        $this->container['autoDetect'] = isset($data['autoDetect']) ? $data['autoDetect'] : null;
        $this->container['dirList'] = isset($data['dirList']) ? $data['dirList'] : null;
        $this->container['extList'] = isset($data['extList']) ? $data['extList'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
            if ((mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^.*$/.";
            }
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
        if ($this->container['autoConfirm'] === null) {
            $invalidProperties[] = "'autoConfirm' can't be null";
        }
        if ($this->container['autoDetect'] === null) {
            $invalidProperties[] = "'autoDetect' can't be null";
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
    * Gets policyId
    *  策略ID
    *
    * @return string
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
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
    *  **参数解释**： 进程白名单策略类型进程白名单策略类型 **取值范围**: - allow：允许指定/授权进程运行 - block：阻止潜在恶意软件运行
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
    * @param string $policyType **参数解释**： 进程白名单策略类型进程白名单策略类型 **取值范围**: - allow：允许指定/授权进程运行 - block：阻止潜在恶意软件运行
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
    *  **参数解释**: 策略学习天数 **取值范围**: 最小值1，最大值1000
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
    * @param int $learningDays **参数解释**: 策略学习天数 **取值范围**: 最小值1，最大值1000
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
    * Gets autoConfirm
    *  **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
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
    * @param bool $autoConfirm **参数解释**： 是否自动确认学习结果 **取值范围**: - true：是 - false：否
    *
    * @return $this
    */
    public function setAutoConfirm($autoConfirm)
    {
        $this->container['autoConfirm'] = $autoConfirm;
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
    * Gets dirList
    *  监控目录列表
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
    * @param string[]|null $dirList 监控目录列表
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
    *  监控文件后缀名列表
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
    * @param string[]|null $extList 监控文件后缀名列表
    *
    * @return $this
    */
    public function setExtList($extList)
    {
        $this->container['extList'] = $extList;
        return $this;
    }

    /**
    * Gets hostIdList
    *  主机id列表
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
    * @param string[] $hostIdList 主机id列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

