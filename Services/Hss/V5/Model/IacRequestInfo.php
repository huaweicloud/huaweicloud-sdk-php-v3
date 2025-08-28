<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IacRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IacRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileIdList  **参数解释**: IaC文件ID列表 **约束限制**: 不涉及 **取值范围**: 1-200个items **默认取值**: 不涉及
    * fileName  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    * fileType  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。 - k8s_yaml：k8s yaml文件。  **默认取值**: 不涉及
    * risky  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险。 - false：无风险。  **默认取值**: 不涉及
    * scanType  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描。 - cicd_scan：cicd扫描。  **默认取值**: manual_scan
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileIdList' => 'string[]',
            'fileName' => 'string',
            'fileType' => 'string',
            'risky' => 'bool',
            'scanType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileIdList  **参数解释**: IaC文件ID列表 **约束限制**: 不涉及 **取值范围**: 1-200个items **默认取值**: 不涉及
    * fileName  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    * fileType  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。 - k8s_yaml：k8s yaml文件。  **默认取值**: 不涉及
    * risky  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险。 - false：无风险。  **默认取值**: 不涉及
    * scanType  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描。 - cicd_scan：cicd扫描。  **默认取值**: manual_scan
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileIdList' => null,
        'fileName' => null,
        'fileType' => null,
        'risky' => null,
        'scanType' => null
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
    * fileIdList  **参数解释**: IaC文件ID列表 **约束限制**: 不涉及 **取值范围**: 1-200个items **默认取值**: 不涉及
    * fileName  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    * fileType  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。 - k8s_yaml：k8s yaml文件。  **默认取值**: 不涉及
    * risky  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险。 - false：无风险。  **默认取值**: 不涉及
    * scanType  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描。 - cicd_scan：cicd扫描。  **默认取值**: manual_scan
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileIdList' => 'file_id_list',
            'fileName' => 'file_name',
            'fileType' => 'file_type',
            'risky' => 'risky',
            'scanType' => 'scan_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileIdList  **参数解释**: IaC文件ID列表 **约束限制**: 不涉及 **取值范围**: 1-200个items **默认取值**: 不涉及
    * fileName  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    * fileType  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。 - k8s_yaml：k8s yaml文件。  **默认取值**: 不涉及
    * risky  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险。 - false：无风险。  **默认取值**: 不涉及
    * scanType  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描。 - cicd_scan：cicd扫描。  **默认取值**: manual_scan
    *
    * @var string[]
    */
    protected static $setters = [
            'fileIdList' => 'setFileIdList',
            'fileName' => 'setFileName',
            'fileType' => 'setFileType',
            'risky' => 'setRisky',
            'scanType' => 'setScanType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileIdList  **参数解释**: IaC文件ID列表 **约束限制**: 不涉及 **取值范围**: 1-200个items **默认取值**: 不涉及
    * fileName  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    * fileType  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。 - k8s_yaml：k8s yaml文件。  **默认取值**: 不涉及
    * risky  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险。 - false：无风险。  **默认取值**: 不涉及
    * scanType  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描。 - cicd_scan：cicd扫描。  **默认取值**: manual_scan
    *
    * @var string[]
    */
    protected static $getters = [
            'fileIdList' => 'getFileIdList',
            'fileName' => 'getFileName',
            'fileType' => 'getFileType',
            'risky' => 'getRisky',
            'scanType' => 'getScanType'
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
        $this->container['fileIdList'] = isset($data['fileIdList']) ? $data['fileIdList'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['risky'] = isset($data['risky']) ? $data['risky'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && !preg_match("/^.*$/", $this->container['fileName'])) {
                $invalidProperties[] = "invalid value for 'fileName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && !preg_match("/^dockerfile|k8s_yaml$/", $this->container['fileType'])) {
                $invalidProperties[] = "invalid value for 'fileType', must be conform to the pattern /^dockerfile|k8s_yaml$/.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanType']) && !preg_match("/^manual_scan|cicd_scan$/", $this->container['scanType'])) {
                $invalidProperties[] = "invalid value for 'scanType', must be conform to the pattern /^manual_scan|cicd_scan$/.";
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
    * Gets fileIdList
    *  **参数解释**: IaC文件ID列表 **约束限制**: 不涉及 **取值范围**: 1-200个items **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getFileIdList()
    {
        return $this->container['fileIdList'];
    }

    /**
    * Sets fileIdList
    *
    * @param string[]|null $fileIdList **参数解释**: IaC文件ID列表 **约束限制**: 不涉及 **取值范围**: 1-200个items **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFileIdList($fileIdList)
    {
        $this->container['fileIdList'] = $fileIdList;
        return $this;
    }

    /**
    * Gets fileName
    *  **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
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
    * @param string|null $fileName **参数解释**: 文件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileType
    *  **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。 - k8s_yaml：k8s yaml文件。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType **参数解释**: 文件类型 **约束限制**: 不涉及 **取值范围**: - dockerfile：Dockerfile文件。 - k8s_yaml：k8s yaml文件。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets risky
    *  **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险。 - false：无风险。  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getRisky()
    {
        return $this->container['risky'];
    }

    /**
    * Sets risky
    *
    * @param bool|null $risky **参数解释**: 是否有风险 **约束限制**: 不涉及 **取值范围**: - true：有风险。 - false：无风险。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRisky($risky)
    {
        $this->container['risky'] = $risky;
        return $this;
    }

    /**
    * Gets scanType
    *  **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描。 - cicd_scan：cicd扫描。  **默认取值**: manual_scan
    *
    * @return string|null
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string|null $scanType **参数解释**: 扫描方式 **约束限制**: 不涉及 **取值范围**: - manual_scan：手动扫描。 - cicd_scan：cicd扫描。  **默认取值**: manual_scan
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
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

