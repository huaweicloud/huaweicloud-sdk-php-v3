<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTakeOverTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTakeOverTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  源桶名。
    * object  源目录名或源文件名。
    * suffix  批量托管时的文件后缀名列表。不传或传空值时，表示托管所有音视频文件，不进行后缀名过滤。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见转码设置。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    * hostType  表示音视频处理后生成的媒资文件所存储的位置类型。  取值如下所示： - 0：表示存储到点播桶。 - 1：表示存储在租户桶。 - 2：表示存储到租户桶，并且存储路径与源文件一致。
    * outputBucket  输出桶名，host_type为1时必选
    * outputPath  输出路径名，host_type为1时必选
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'object' => 'string',
            'suffix' => 'string[]',
            'templateGroupName' => 'string',
            'workflowName' => 'string',
            'hostType' => 'int',
            'outputBucket' => 'string',
            'outputPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  源桶名。
    * object  源目录名或源文件名。
    * suffix  批量托管时的文件后缀名列表。不传或传空值时，表示托管所有音视频文件，不进行后缀名过滤。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见转码设置。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    * hostType  表示音视频处理后生成的媒资文件所存储的位置类型。  取值如下所示： - 0：表示存储到点播桶。 - 1：表示存储在租户桶。 - 2：表示存储到租户桶，并且存储路径与源文件一致。
    * outputBucket  输出桶名，host_type为1时必选
    * outputPath  输出路径名，host_type为1时必选
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'object' => null,
        'suffix' => null,
        'templateGroupName' => null,
        'workflowName' => null,
        'hostType' => null,
        'outputBucket' => null,
        'outputPath' => null
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
    * bucket  源桶名。
    * object  源目录名或源文件名。
    * suffix  批量托管时的文件后缀名列表。不传或传空值时，表示托管所有音视频文件，不进行后缀名过滤。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见转码设置。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    * hostType  表示音视频处理后生成的媒资文件所存储的位置类型。  取值如下所示： - 0：表示存储到点播桶。 - 1：表示存储在租户桶。 - 2：表示存储到租户桶，并且存储路径与源文件一致。
    * outputBucket  输出桶名，host_type为1时必选
    * outputPath  输出路径名，host_type为1时必选
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'object' => 'object',
            'suffix' => 'suffix',
            'templateGroupName' => 'template_group_name',
            'workflowName' => 'workflow_name',
            'hostType' => 'host_type',
            'outputBucket' => 'output_bucket',
            'outputPath' => 'output_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  源桶名。
    * object  源目录名或源文件名。
    * suffix  批量托管时的文件后缀名列表。不传或传空值时，表示托管所有音视频文件，不进行后缀名过滤。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见转码设置。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    * hostType  表示音视频处理后生成的媒资文件所存储的位置类型。  取值如下所示： - 0：表示存储到点播桶。 - 1：表示存储在租户桶。 - 2：表示存储到租户桶，并且存储路径与源文件一致。
    * outputBucket  输出桶名，host_type为1时必选
    * outputPath  输出路径名，host_type为1时必选
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'object' => 'setObject',
            'suffix' => 'setSuffix',
            'templateGroupName' => 'setTemplateGroupName',
            'workflowName' => 'setWorkflowName',
            'hostType' => 'setHostType',
            'outputBucket' => 'setOutputBucket',
            'outputPath' => 'setOutputPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  源桶名。
    * object  源目录名或源文件名。
    * suffix  批量托管时的文件后缀名列表。不传或传空值时，表示托管所有音视频文件，不进行后缀名过滤。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见转码设置。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    * hostType  表示音视频处理后生成的媒资文件所存储的位置类型。  取值如下所示： - 0：表示存储到点播桶。 - 1：表示存储在租户桶。 - 2：表示存储到租户桶，并且存储路径与源文件一致。
    * outputBucket  输出桶名，host_type为1时必选
    * outputPath  输出路径名，host_type为1时必选
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'object' => 'getObject',
            'suffix' => 'getSuffix',
            'templateGroupName' => 'getTemplateGroupName',
            'workflowName' => 'getWorkflowName',
            'hostType' => 'getHostType',
            'outputBucket' => 'getOutputBucket',
            'outputPath' => 'getOutputPath'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['templateGroupName'] = isset($data['templateGroupName']) ? $data['templateGroupName'] : null;
        $this->container['workflowName'] = isset($data['workflowName']) ? $data['workflowName'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['outputBucket'] = isset($data['outputBucket']) ? $data['outputBucket'] : null;
        $this->container['outputPath'] = isset($data['outputPath']) ? $data['outputPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
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
    * Gets bucket
    *  源桶名。
    *
    * @return string
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string $bucket 源桶名。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets object
    *  源目录名或源文件名。
    *
    * @return string
    */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
    * Sets object
    *
    * @param string $object 源目录名或源文件名。
    *
    * @return $this
    */
    public function setObject($object)
    {
        $this->container['object'] = $object;
        return $this;
    }

    /**
    * Gets suffix
    *  批量托管时的文件后缀名列表。不传或传空值时，表示托管所有音视频文件，不进行后缀名过滤。
    *
    * @return string[]|null
    */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
    * Sets suffix
    *
    * @param string[]|null $suffix 批量托管时的文件后缀名列表。不传或传空值时，表示托管所有音视频文件，不进行后缀名过滤。
    *
    * @return $this
    */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;
        return $this;
    }

    /**
    * Gets templateGroupName
    *  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见转码设置。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    *
    * @return string|null
    */
    public function getTemplateGroupName()
    {
        return $this->container['templateGroupName'];
    }

    /**
    * Sets templateGroupName
    *
    * @param string|null $templateGroupName 转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见转码设置。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    *
    * @return $this
    */
    public function setTemplateGroupName($templateGroupName)
    {
        $this->container['templateGroupName'] = $templateGroupName;
        return $this;
    }

    /**
    * Gets workflowName
    *  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @return string|null
    */
    public function getWorkflowName()
    {
        return $this->container['workflowName'];
    }

    /**
    * Sets workflowName
    *
    * @param string|null $workflowName 工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @return $this
    */
    public function setWorkflowName($workflowName)
    {
        $this->container['workflowName'] = $workflowName;
        return $this;
    }

    /**
    * Gets hostType
    *  表示音视频处理后生成的媒资文件所存储的位置类型。  取值如下所示： - 0：表示存储到点播桶。 - 1：表示存储在租户桶。 - 2：表示存储到租户桶，并且存储路径与源文件一致。
    *
    * @return int|null
    */
    public function getHostType()
    {
        return $this->container['hostType'];
    }

    /**
    * Sets hostType
    *
    * @param int|null $hostType 表示音视频处理后生成的媒资文件所存储的位置类型。  取值如下所示： - 0：表示存储到点播桶。 - 1：表示存储在租户桶。 - 2：表示存储到租户桶，并且存储路径与源文件一致。
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets outputBucket
    *  输出桶名，host_type为1时必选
    *
    * @return string|null
    */
    public function getOutputBucket()
    {
        return $this->container['outputBucket'];
    }

    /**
    * Sets outputBucket
    *
    * @param string|null $outputBucket 输出桶名，host_type为1时必选
    *
    * @return $this
    */
    public function setOutputBucket($outputBucket)
    {
        $this->container['outputBucket'] = $outputBucket;
        return $this;
    }

    /**
    * Gets outputPath
    *  输出路径名，host_type为1时必选
    *
    * @return string|null
    */
    public function getOutputPath()
    {
        return $this->container['outputPath'];
    }

    /**
    * Sets outputPath
    *
    * @param string|null $outputPath 输出路径名，host_type为1时必选
    *
    * @return $this
    */
    public function setOutputPath($outputPath)
    {
        $this->container['outputPath'] = $outputPath;
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

