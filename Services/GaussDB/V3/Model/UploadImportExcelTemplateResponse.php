<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadImportExcelTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadImportExcelTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * success  **参数解释**：  Excel导入返回状态。  **取值范围**：  - true: 导入成功。 - false： 导入失败。
    * processedRows  **参数解释**：  已处理的行数。   **取值范围**：  不涉及。
    * errorTables  **参数解释**：  导入失败返回的错误列表。
    * successTables  **参数解释**：  Excel导入验证成功的列表。
    * errorCount  **参数解释**：  Excel导入验证失败的行数。   **取值范围**：  不涉及。
    * successCount  **参数解释**：  Excel导入验证成功的行数。   **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'success' => 'bool',
            'processedRows' => 'int',
            'errorTables' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ErrorTable[]',
            'successTables' => '\HuaweiCloud\SDK\GaussDB\V3\Model\SuccessTable[]',
            'errorCount' => 'int',
            'successCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * success  **参数解释**：  Excel导入返回状态。  **取值范围**：  - true: 导入成功。 - false： 导入失败。
    * processedRows  **参数解释**：  已处理的行数。   **取值范围**：  不涉及。
    * errorTables  **参数解释**：  导入失败返回的错误列表。
    * successTables  **参数解释**：  Excel导入验证成功的列表。
    * errorCount  **参数解释**：  Excel导入验证失败的行数。   **取值范围**：  不涉及。
    * successCount  **参数解释**：  Excel导入验证成功的行数。   **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'success' => null,
        'processedRows' => null,
        'errorTables' => null,
        'successTables' => null,
        'errorCount' => null,
        'successCount' => null
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
    * success  **参数解释**：  Excel导入返回状态。  **取值范围**：  - true: 导入成功。 - false： 导入失败。
    * processedRows  **参数解释**：  已处理的行数。   **取值范围**：  不涉及。
    * errorTables  **参数解释**：  导入失败返回的错误列表。
    * successTables  **参数解释**：  Excel导入验证成功的列表。
    * errorCount  **参数解释**：  Excel导入验证失败的行数。   **取值范围**：  不涉及。
    * successCount  **参数解释**：  Excel导入验证成功的行数。   **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'success' => 'success',
            'processedRows' => 'processed_rows',
            'errorTables' => 'error_tables',
            'successTables' => 'success_tables',
            'errorCount' => 'error_count',
            'successCount' => 'success_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * success  **参数解释**：  Excel导入返回状态。  **取值范围**：  - true: 导入成功。 - false： 导入失败。
    * processedRows  **参数解释**：  已处理的行数。   **取值范围**：  不涉及。
    * errorTables  **参数解释**：  导入失败返回的错误列表。
    * successTables  **参数解释**：  Excel导入验证成功的列表。
    * errorCount  **参数解释**：  Excel导入验证失败的行数。   **取值范围**：  不涉及。
    * successCount  **参数解释**：  Excel导入验证成功的行数。   **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'success' => 'setSuccess',
            'processedRows' => 'setProcessedRows',
            'errorTables' => 'setErrorTables',
            'successTables' => 'setSuccessTables',
            'errorCount' => 'setErrorCount',
            'successCount' => 'setSuccessCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * success  **参数解释**：  Excel导入返回状态。  **取值范围**：  - true: 导入成功。 - false： 导入失败。
    * processedRows  **参数解释**：  已处理的行数。   **取值范围**：  不涉及。
    * errorTables  **参数解释**：  导入失败返回的错误列表。
    * successTables  **参数解释**：  Excel导入验证成功的列表。
    * errorCount  **参数解释**：  Excel导入验证失败的行数。   **取值范围**：  不涉及。
    * successCount  **参数解释**：  Excel导入验证成功的行数。   **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'success' => 'getSuccess',
            'processedRows' => 'getProcessedRows',
            'errorTables' => 'getErrorTables',
            'successTables' => 'getSuccessTables',
            'errorCount' => 'getErrorCount',
            'successCount' => 'getSuccessCount'
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['processedRows'] = isset($data['processedRows']) ? $data['processedRows'] : null;
        $this->container['errorTables'] = isset($data['errorTables']) ? $data['errorTables'] : null;
        $this->container['successTables'] = isset($data['successTables']) ? $data['successTables'] : null;
        $this->container['errorCount'] = isset($data['errorCount']) ? $data['errorCount'] : null;
        $this->container['successCount'] = isset($data['successCount']) ? $data['successCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets success
    *  **参数解释**：  Excel导入返回状态。  **取值范围**：  - true: 导入成功。 - false： 导入失败。
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success **参数解释**：  Excel导入返回状态。  **取值范围**：  - true: 导入成功。 - false： 导入失败。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets processedRows
    *  **参数解释**：  已处理的行数。   **取值范围**：  不涉及。
    *
    * @return int|null
    */
    public function getProcessedRows()
    {
        return $this->container['processedRows'];
    }

    /**
    * Sets processedRows
    *
    * @param int|null $processedRows **参数解释**：  已处理的行数。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setProcessedRows($processedRows)
    {
        $this->container['processedRows'] = $processedRows;
        return $this;
    }

    /**
    * Gets errorTables
    *  **参数解释**：  导入失败返回的错误列表。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ErrorTable[]|null
    */
    public function getErrorTables()
    {
        return $this->container['errorTables'];
    }

    /**
    * Sets errorTables
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ErrorTable[]|null $errorTables **参数解释**：  导入失败返回的错误列表。
    *
    * @return $this
    */
    public function setErrorTables($errorTables)
    {
        $this->container['errorTables'] = $errorTables;
        return $this;
    }

    /**
    * Gets successTables
    *  **参数解释**：  Excel导入验证成功的列表。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\SuccessTable[]|null
    */
    public function getSuccessTables()
    {
        return $this->container['successTables'];
    }

    /**
    * Sets successTables
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\SuccessTable[]|null $successTables **参数解释**：  Excel导入验证成功的列表。
    *
    * @return $this
    */
    public function setSuccessTables($successTables)
    {
        $this->container['successTables'] = $successTables;
        return $this;
    }

    /**
    * Gets errorCount
    *  **参数解释**：  Excel导入验证失败的行数。   **取值范围**：  不涉及。
    *
    * @return int|null
    */
    public function getErrorCount()
    {
        return $this->container['errorCount'];
    }

    /**
    * Sets errorCount
    *
    * @param int|null $errorCount **参数解释**：  Excel导入验证失败的行数。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setErrorCount($errorCount)
    {
        $this->container['errorCount'] = $errorCount;
        return $this;
    }

    /**
    * Gets successCount
    *  **参数解释**：  Excel导入验证成功的行数。   **取值范围**：  不涉及。
    *
    * @return int|null
    */
    public function getSuccessCount()
    {
        return $this->container['successCount'];
    }

    /**
    * Sets successCount
    *
    * @param int|null $successCount **参数解释**：  Excel导入验证成功的行数。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSuccessCount($successCount)
    {
        $this->container['successCount'] = $successCount;
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

