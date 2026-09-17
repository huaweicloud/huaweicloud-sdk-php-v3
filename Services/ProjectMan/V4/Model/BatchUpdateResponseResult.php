<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateResponse_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * project  project
    * journalIds  **参数解释：** 历史记录id。 **取值范围：** 不涉及。
    * errorIssues  **参数解释：** 编辑失败的工作项。 **取值范围：** 不涉及。
    * versionsIssues  **参数解释：** 工作项的迭代版本。 **取值范围：** 不涉及。
    * successIssues  **参数解释：** 编辑成功的工作项。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'project' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\BatchUpdateResponseResultProject',
            'journalIds' => 'string[]',
            'errorIssues' => 'int[]',
            'versionsIssues' => 'string[]',
            'successIssues' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * project  project
    * journalIds  **参数解释：** 历史记录id。 **取值范围：** 不涉及。
    * errorIssues  **参数解释：** 编辑失败的工作项。 **取值范围：** 不涉及。
    * versionsIssues  **参数解释：** 工作项的迭代版本。 **取值范围：** 不涉及。
    * successIssues  **参数解释：** 编辑成功的工作项。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'project' => null,
        'journalIds' => null,
        'errorIssues' => 'int32',
        'versionsIssues' => null,
        'successIssues' => null
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
    * project  project
    * journalIds  **参数解释：** 历史记录id。 **取值范围：** 不涉及。
    * errorIssues  **参数解释：** 编辑失败的工作项。 **取值范围：** 不涉及。
    * versionsIssues  **参数解释：** 工作项的迭代版本。 **取值范围：** 不涉及。
    * successIssues  **参数解释：** 编辑成功的工作项。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'project' => 'project',
            'journalIds' => 'journal_ids',
            'errorIssues' => 'error_issues',
            'versionsIssues' => 'versions_issues',
            'successIssues' => 'success_issues'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * project  project
    * journalIds  **参数解释：** 历史记录id。 **取值范围：** 不涉及。
    * errorIssues  **参数解释：** 编辑失败的工作项。 **取值范围：** 不涉及。
    * versionsIssues  **参数解释：** 工作项的迭代版本。 **取值范围：** 不涉及。
    * successIssues  **参数解释：** 编辑成功的工作项。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'project' => 'setProject',
            'journalIds' => 'setJournalIds',
            'errorIssues' => 'setErrorIssues',
            'versionsIssues' => 'setVersionsIssues',
            'successIssues' => 'setSuccessIssues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * project  project
    * journalIds  **参数解释：** 历史记录id。 **取值范围：** 不涉及。
    * errorIssues  **参数解释：** 编辑失败的工作项。 **取值范围：** 不涉及。
    * versionsIssues  **参数解释：** 工作项的迭代版本。 **取值范围：** 不涉及。
    * successIssues  **参数解释：** 编辑成功的工作项。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'project' => 'getProject',
            'journalIds' => 'getJournalIds',
            'errorIssues' => 'getErrorIssues',
            'versionsIssues' => 'getVersionsIssues',
            'successIssues' => 'getSuccessIssues'
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
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['journalIds'] = isset($data['journalIds']) ? $data['journalIds'] : null;
        $this->container['errorIssues'] = isset($data['errorIssues']) ? $data['errorIssues'] : null;
        $this->container['versionsIssues'] = isset($data['versionsIssues']) ? $data['versionsIssues'] : null;
        $this->container['successIssues'] = isset($data['successIssues']) ? $data['successIssues'] : null;
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
    * Gets project
    *  project
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\BatchUpdateResponseResultProject|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\BatchUpdateResponseResultProject|null $project project
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets journalIds
    *  **参数解释：** 历史记录id。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getJournalIds()
    {
        return $this->container['journalIds'];
    }

    /**
    * Sets journalIds
    *
    * @param string[]|null $journalIds **参数解释：** 历史记录id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setJournalIds($journalIds)
    {
        $this->container['journalIds'] = $journalIds;
        return $this;
    }

    /**
    * Gets errorIssues
    *  **参数解释：** 编辑失败的工作项。 **取值范围：** 不涉及。
    *
    * @return int[]|null
    */
    public function getErrorIssues()
    {
        return $this->container['errorIssues'];
    }

    /**
    * Sets errorIssues
    *
    * @param int[]|null $errorIssues **参数解释：** 编辑失败的工作项。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setErrorIssues($errorIssues)
    {
        $this->container['errorIssues'] = $errorIssues;
        return $this;
    }

    /**
    * Gets versionsIssues
    *  **参数解释：** 工作项的迭代版本。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getVersionsIssues()
    {
        return $this->container['versionsIssues'];
    }

    /**
    * Sets versionsIssues
    *
    * @param string[]|null $versionsIssues **参数解释：** 工作项的迭代版本。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setVersionsIssues($versionsIssues)
    {
        $this->container['versionsIssues'] = $versionsIssues;
        return $this;
    }

    /**
    * Gets successIssues
    *  **参数解释：** 编辑成功的工作项。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getSuccessIssues()
    {
        return $this->container['successIssues'];
    }

    /**
    * Sets successIssues
    *
    * @param string[]|null $successIssues **参数解释：** 编辑成功的工作项。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSuccessIssues($successIssues)
    {
        $this->container['successIssues'] = $successIssues;
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

