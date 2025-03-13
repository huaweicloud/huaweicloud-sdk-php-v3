<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportDefaultCategoryResultDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportDefaultCategoryResultDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * importStatus  导入状态 * success 导入成功 * failed 导入失败
    * importErrorMessage  导入错误原因。
    * children  子分类导入结果。
    * ruleResult  此分类绑定的规则导入的结果。
    * uuid  数据分类id。
    * name  数据分类名称。
    * description  数据分类描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'importStatus' => 'string',
            'importErrorMessage' => 'string',
            'children' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDefaultCategoryResultDto[]',
            'ruleResult' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDefaultRuleResultDto[]',
            'uuid' => 'string',
            'name' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * importStatus  导入状态 * success 导入成功 * failed 导入失败
    * importErrorMessage  导入错误原因。
    * children  子分类导入结果。
    * ruleResult  此分类绑定的规则导入的结果。
    * uuid  数据分类id。
    * name  数据分类名称。
    * description  数据分类描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'importStatus' => null,
        'importErrorMessage' => null,
        'children' => null,
        'ruleResult' => null,
        'uuid' => null,
        'name' => null,
        'description' => null
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
    * importStatus  导入状态 * success 导入成功 * failed 导入失败
    * importErrorMessage  导入错误原因。
    * children  子分类导入结果。
    * ruleResult  此分类绑定的规则导入的结果。
    * uuid  数据分类id。
    * name  数据分类名称。
    * description  数据分类描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'importStatus' => 'import_status',
            'importErrorMessage' => 'import_error_message',
            'children' => 'children',
            'ruleResult' => 'rule_result',
            'uuid' => 'uuid',
            'name' => 'name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * importStatus  导入状态 * success 导入成功 * failed 导入失败
    * importErrorMessage  导入错误原因。
    * children  子分类导入结果。
    * ruleResult  此分类绑定的规则导入的结果。
    * uuid  数据分类id。
    * name  数据分类名称。
    * description  数据分类描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'importStatus' => 'setImportStatus',
            'importErrorMessage' => 'setImportErrorMessage',
            'children' => 'setChildren',
            'ruleResult' => 'setRuleResult',
            'uuid' => 'setUuid',
            'name' => 'setName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * importStatus  导入状态 * success 导入成功 * failed 导入失败
    * importErrorMessage  导入错误原因。
    * children  子分类导入结果。
    * ruleResult  此分类绑定的规则导入的结果。
    * uuid  数据分类id。
    * name  数据分类名称。
    * description  数据分类描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'importStatus' => 'getImportStatus',
            'importErrorMessage' => 'getImportErrorMessage',
            'children' => 'getChildren',
            'ruleResult' => 'getRuleResult',
            'uuid' => 'getUuid',
            'name' => 'getName',
            'description' => 'getDescription'
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
    const IMPORT_STATUS_SUCCESS = 'success';
    const IMPORT_STATUS_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getImportStatusAllowableValues()
    {
        return [
            self::IMPORT_STATUS_SUCCESS,
            self::IMPORT_STATUS_FAILED,
        ];
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
        $this->container['importStatus'] = isset($data['importStatus']) ? $data['importStatus'] : null;
        $this->container['importErrorMessage'] = isset($data['importErrorMessage']) ? $data['importErrorMessage'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['ruleResult'] = isset($data['ruleResult']) ? $data['ruleResult'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getImportStatusAllowableValues();
                if (!is_null($this->container['importStatus']) && !in_array($this->container['importStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'importStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['importErrorMessage']) && (mb_strlen($this->container['importErrorMessage']) > 4096)) {
                $invalidProperties[] = "invalid value for 'importErrorMessage', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['importErrorMessage']) && (mb_strlen($this->container['importErrorMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'importErrorMessage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 128)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets importStatus
    *  导入状态 * success 导入成功 * failed 导入失败
    *
    * @return string|null
    */
    public function getImportStatus()
    {
        return $this->container['importStatus'];
    }

    /**
    * Sets importStatus
    *
    * @param string|null $importStatus 导入状态 * success 导入成功 * failed 导入失败
    *
    * @return $this
    */
    public function setImportStatus($importStatus)
    {
        $this->container['importStatus'] = $importStatus;
        return $this;
    }

    /**
    * Gets importErrorMessage
    *  导入错误原因。
    *
    * @return string|null
    */
    public function getImportErrorMessage()
    {
        return $this->container['importErrorMessage'];
    }

    /**
    * Sets importErrorMessage
    *
    * @param string|null $importErrorMessage 导入错误原因。
    *
    * @return $this
    */
    public function setImportErrorMessage($importErrorMessage)
    {
        $this->container['importErrorMessage'] = $importErrorMessage;
        return $this;
    }

    /**
    * Gets children
    *  子分类导入结果。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDefaultCategoryResultDto[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDefaultCategoryResultDto[]|null $children 子分类导入结果。
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets ruleResult
    *  此分类绑定的规则导入的结果。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDefaultRuleResultDto[]|null
    */
    public function getRuleResult()
    {
        return $this->container['ruleResult'];
    }

    /**
    * Sets ruleResult
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDefaultRuleResultDto[]|null $ruleResult 此分类绑定的规则导入的结果。
    *
    * @return $this
    */
    public function setRuleResult($ruleResult)
    {
        $this->container['ruleResult'] = $ruleResult;
        return $this;
    }

    /**
    * Gets uuid
    *  数据分类id。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 数据分类id。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets name
    *  数据分类名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 数据分类名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  数据分类描述。
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
    * @param string|null $description 数据分类描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

