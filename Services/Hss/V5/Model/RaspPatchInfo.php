<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RaspPatchInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RaspPatchInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chkFeatureId  **参数解释**: 特征检查项ID **取值范围**: 最小值0，最大值2097152
    * patchName  **参数解释**: 补丁名称 **取值范围**: 字符长度0-128位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512位
    * cveList  **参数解释**: CVE列表 **取值范围**: 0-128个RaspCveInfo对象
    * artifact  **参数解释**: 目标组件 **取值范围**: 字符长度0-128位
    * vulnVersion  **参数解释**: 影响版本 **取值范围**: 字符长度0-128位
    * pluginVersion  **参数解释**: 补丁版本 **取值范围**: 字符长度0-64位
    * description  **参数解释**: 漏洞说明 **取值范围**: 字符长度0-512位
    * optionalProtectiveAction  **参数解释**: 可选防护动作 **取值范围**: 最小值1，最大值3
    * protectiveAction  **参数解释**: 防护动作 **取值范围**: 最小值1，最大值2
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chkFeatureId' => 'int',
            'patchName' => 'string',
            'vulId' => 'string',
            'vulName' => 'string',
            'cveList' => '\HuaweiCloud\SDK\Hss\V5\Model\RaspCveInfo[]',
            'artifact' => 'string',
            'vulnVersion' => 'string',
            'pluginVersion' => 'string',
            'description' => 'string',
            'optionalProtectiveAction' => 'int',
            'protectiveAction' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chkFeatureId  **参数解释**: 特征检查项ID **取值范围**: 最小值0，最大值2097152
    * patchName  **参数解释**: 补丁名称 **取值范围**: 字符长度0-128位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512位
    * cveList  **参数解释**: CVE列表 **取值范围**: 0-128个RaspCveInfo对象
    * artifact  **参数解释**: 目标组件 **取值范围**: 字符长度0-128位
    * vulnVersion  **参数解释**: 影响版本 **取值范围**: 字符长度0-128位
    * pluginVersion  **参数解释**: 补丁版本 **取值范围**: 字符长度0-64位
    * description  **参数解释**: 漏洞说明 **取值范围**: 字符长度0-512位
    * optionalProtectiveAction  **参数解释**: 可选防护动作 **取值范围**: 最小值1，最大值3
    * protectiveAction  **参数解释**: 防护动作 **取值范围**: 最小值1，最大值2
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chkFeatureId' => 'int64',
        'patchName' => null,
        'vulId' => null,
        'vulName' => null,
        'cveList' => null,
        'artifact' => null,
        'vulnVersion' => null,
        'pluginVersion' => null,
        'description' => null,
        'optionalProtectiveAction' => 'int32',
        'protectiveAction' => 'int32'
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
    * chkFeatureId  **参数解释**: 特征检查项ID **取值范围**: 最小值0，最大值2097152
    * patchName  **参数解释**: 补丁名称 **取值范围**: 字符长度0-128位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512位
    * cveList  **参数解释**: CVE列表 **取值范围**: 0-128个RaspCveInfo对象
    * artifact  **参数解释**: 目标组件 **取值范围**: 字符长度0-128位
    * vulnVersion  **参数解释**: 影响版本 **取值范围**: 字符长度0-128位
    * pluginVersion  **参数解释**: 补丁版本 **取值范围**: 字符长度0-64位
    * description  **参数解释**: 漏洞说明 **取值范围**: 字符长度0-512位
    * optionalProtectiveAction  **参数解释**: 可选防护动作 **取值范围**: 最小值1，最大值3
    * protectiveAction  **参数解释**: 防护动作 **取值范围**: 最小值1，最大值2
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chkFeatureId' => 'chk_feature_id',
            'patchName' => 'patch_name',
            'vulId' => 'vul_id',
            'vulName' => 'vul_name',
            'cveList' => 'cve_list',
            'artifact' => 'artifact',
            'vulnVersion' => 'vuln_version',
            'pluginVersion' => 'plugin_version',
            'description' => 'description',
            'optionalProtectiveAction' => 'optional_protective_action',
            'protectiveAction' => 'protective_action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chkFeatureId  **参数解释**: 特征检查项ID **取值范围**: 最小值0，最大值2097152
    * patchName  **参数解释**: 补丁名称 **取值范围**: 字符长度0-128位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512位
    * cveList  **参数解释**: CVE列表 **取值范围**: 0-128个RaspCveInfo对象
    * artifact  **参数解释**: 目标组件 **取值范围**: 字符长度0-128位
    * vulnVersion  **参数解释**: 影响版本 **取值范围**: 字符长度0-128位
    * pluginVersion  **参数解释**: 补丁版本 **取值范围**: 字符长度0-64位
    * description  **参数解释**: 漏洞说明 **取值范围**: 字符长度0-512位
    * optionalProtectiveAction  **参数解释**: 可选防护动作 **取值范围**: 最小值1，最大值3
    * protectiveAction  **参数解释**: 防护动作 **取值范围**: 最小值1，最大值2
    *
    * @var string[]
    */
    protected static $setters = [
            'chkFeatureId' => 'setChkFeatureId',
            'patchName' => 'setPatchName',
            'vulId' => 'setVulId',
            'vulName' => 'setVulName',
            'cveList' => 'setCveList',
            'artifact' => 'setArtifact',
            'vulnVersion' => 'setVulnVersion',
            'pluginVersion' => 'setPluginVersion',
            'description' => 'setDescription',
            'optionalProtectiveAction' => 'setOptionalProtectiveAction',
            'protectiveAction' => 'setProtectiveAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chkFeatureId  **参数解释**: 特征检查项ID **取值范围**: 最小值0，最大值2097152
    * patchName  **参数解释**: 补丁名称 **取值范围**: 字符长度0-128位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512位
    * cveList  **参数解释**: CVE列表 **取值范围**: 0-128个RaspCveInfo对象
    * artifact  **参数解释**: 目标组件 **取值范围**: 字符长度0-128位
    * vulnVersion  **参数解释**: 影响版本 **取值范围**: 字符长度0-128位
    * pluginVersion  **参数解释**: 补丁版本 **取值范围**: 字符长度0-64位
    * description  **参数解释**: 漏洞说明 **取值范围**: 字符长度0-512位
    * optionalProtectiveAction  **参数解释**: 可选防护动作 **取值范围**: 最小值1，最大值3
    * protectiveAction  **参数解释**: 防护动作 **取值范围**: 最小值1，最大值2
    *
    * @var string[]
    */
    protected static $getters = [
            'chkFeatureId' => 'getChkFeatureId',
            'patchName' => 'getPatchName',
            'vulId' => 'getVulId',
            'vulName' => 'getVulName',
            'cveList' => 'getCveList',
            'artifact' => 'getArtifact',
            'vulnVersion' => 'getVulnVersion',
            'pluginVersion' => 'getPluginVersion',
            'description' => 'getDescription',
            'optionalProtectiveAction' => 'getOptionalProtectiveAction',
            'protectiveAction' => 'getProtectiveAction'
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
        $this->container['chkFeatureId'] = isset($data['chkFeatureId']) ? $data['chkFeatureId'] : null;
        $this->container['patchName'] = isset($data['patchName']) ? $data['patchName'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['cveList'] = isset($data['cveList']) ? $data['cveList'] : null;
        $this->container['artifact'] = isset($data['artifact']) ? $data['artifact'] : null;
        $this->container['vulnVersion'] = isset($data['vulnVersion']) ? $data['vulnVersion'] : null;
        $this->container['pluginVersion'] = isset($data['pluginVersion']) ? $data['pluginVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['optionalProtectiveAction'] = isset($data['optionalProtectiveAction']) ? $data['optionalProtectiveAction'] : null;
        $this->container['protectiveAction'] = isset($data['protectiveAction']) ? $data['protectiveAction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['chkFeatureId']) && ($this->container['chkFeatureId'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'chkFeatureId', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['chkFeatureId']) && ($this->container['chkFeatureId'] < 0)) {
                $invalidProperties[] = "invalid value for 'chkFeatureId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['patchName']) && (mb_strlen($this->container['patchName']) > 128)) {
                $invalidProperties[] = "invalid value for 'patchName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['patchName']) && (mb_strlen($this->container['patchName']) < 0)) {
                $invalidProperties[] = "invalid value for 'patchName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 512)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['artifact']) && (mb_strlen($this->container['artifact']) > 128)) {
                $invalidProperties[] = "invalid value for 'artifact', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['artifact']) && (mb_strlen($this->container['artifact']) < 0)) {
                $invalidProperties[] = "invalid value for 'artifact', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulnVersion']) && (mb_strlen($this->container['vulnVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'vulnVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vulnVersion']) && (mb_strlen($this->container['vulnVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulnVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pluginVersion']) && (mb_strlen($this->container['pluginVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'pluginVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['pluginVersion']) && (mb_strlen($this->container['pluginVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'pluginVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['optionalProtectiveAction']) && ($this->container['optionalProtectiveAction'] > 3)) {
                $invalidProperties[] = "invalid value for 'optionalProtectiveAction', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['optionalProtectiveAction']) && ($this->container['optionalProtectiveAction'] < 1)) {
                $invalidProperties[] = "invalid value for 'optionalProtectiveAction', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectiveAction']) && ($this->container['protectiveAction'] > 2)) {
                $invalidProperties[] = "invalid value for 'protectiveAction', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['protectiveAction']) && ($this->container['protectiveAction'] < 1)) {
                $invalidProperties[] = "invalid value for 'protectiveAction', must be bigger than or equal to 1.";
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
    * Gets chkFeatureId
    *  **参数解释**: 特征检查项ID **取值范围**: 最小值0，最大值2097152
    *
    * @return int|null
    */
    public function getChkFeatureId()
    {
        return $this->container['chkFeatureId'];
    }

    /**
    * Sets chkFeatureId
    *
    * @param int|null $chkFeatureId **参数解释**: 特征检查项ID **取值范围**: 最小值0，最大值2097152
    *
    * @return $this
    */
    public function setChkFeatureId($chkFeatureId)
    {
        $this->container['chkFeatureId'] = $chkFeatureId;
        return $this;
    }

    /**
    * Gets patchName
    *  **参数解释**: 补丁名称 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getPatchName()
    {
        return $this->container['patchName'];
    }

    /**
    * Sets patchName
    *
    * @param string|null $patchName **参数解释**: 补丁名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setPatchName($patchName)
    {
        $this->container['patchName'] = $patchName;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**: 漏洞名称 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets cveList
    *  **参数解释**: CVE列表 **取值范围**: 0-128个RaspCveInfo对象
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RaspCveInfo[]|null
    */
    public function getCveList()
    {
        return $this->container['cveList'];
    }

    /**
    * Sets cveList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RaspCveInfo[]|null $cveList **参数解释**: CVE列表 **取值范围**: 0-128个RaspCveInfo对象
    *
    * @return $this
    */
    public function setCveList($cveList)
    {
        $this->container['cveList'] = $cveList;
        return $this;
    }

    /**
    * Gets artifact
    *  **参数解释**: 目标组件 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getArtifact()
    {
        return $this->container['artifact'];
    }

    /**
    * Sets artifact
    *
    * @param string|null $artifact **参数解释**: 目标组件 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setArtifact($artifact)
    {
        $this->container['artifact'] = $artifact;
        return $this;
    }

    /**
    * Gets vulnVersion
    *  **参数解释**: 影响版本 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getVulnVersion()
    {
        return $this->container['vulnVersion'];
    }

    /**
    * Sets vulnVersion
    *
    * @param string|null $vulnVersion **参数解释**: 影响版本 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setVulnVersion($vulnVersion)
    {
        $this->container['vulnVersion'] = $vulnVersion;
        return $this;
    }

    /**
    * Gets pluginVersion
    *  **参数解释**: 补丁版本 **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getPluginVersion()
    {
        return $this->container['pluginVersion'];
    }

    /**
    * Sets pluginVersion
    *
    * @param string|null $pluginVersion **参数解释**: 补丁版本 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setPluginVersion($pluginVersion)
    {
        $this->container['pluginVersion'] = $pluginVersion;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 漏洞说明 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**: 漏洞说明 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets optionalProtectiveAction
    *  **参数解释**: 可选防护动作 **取值范围**: 最小值1，最大值3
    *
    * @return int|null
    */
    public function getOptionalProtectiveAction()
    {
        return $this->container['optionalProtectiveAction'];
    }

    /**
    * Sets optionalProtectiveAction
    *
    * @param int|null $optionalProtectiveAction **参数解释**: 可选防护动作 **取值范围**: 最小值1，最大值3
    *
    * @return $this
    */
    public function setOptionalProtectiveAction($optionalProtectiveAction)
    {
        $this->container['optionalProtectiveAction'] = $optionalProtectiveAction;
        return $this;
    }

    /**
    * Gets protectiveAction
    *  **参数解释**: 防护动作 **取值范围**: 最小值1，最大值2
    *
    * @return int|null
    */
    public function getProtectiveAction()
    {
        return $this->container['protectiveAction'];
    }

    /**
    * Sets protectiveAction
    *
    * @param int|null $protectiveAction **参数解释**: 防护动作 **取值范围**: 最小值1，最大值2
    *
    * @return $this
    */
    public function setProtectiveAction($protectiveAction)
    {
        $this->container['protectiveAction'] = $protectiveAction;
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

