<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int $project_id
 * @property string $action_type
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ActivityLogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereActionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityLog whereUpdatedAt($value)
 */
	class ActivityLog extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $platform
 * @property string $platform_username
 * @property string $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CostumerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer wherePlatformUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Costumer whereUpdatedAt($value)
 */
	class Costumer extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $project_id
 * @property string $type
 * @property string $host
 * @property string $username
 * @property string $encrypted_password
 * @property bool $is_tested
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CredentialFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential whereEncryptedPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential whereHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential whereIsTested($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Credential whereUsername($value)
 */
	class Credential extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $project_id
 * @property string $invoice_number
 * @property numeric $amount_gross
 * @property numeric $platform_fee
 * @property numeric $amount_net
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\InvoiceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereAmountGross($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereAmountNet($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice wherePlatformFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Invoice whereUpdatedAt($value)
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $costumer_id
 * @property string $name
 * @property string $status
 * @property string $deadline
 * @property numeric $budget_amount
 * @property string $repository_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ProjectFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereBudgetAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereCostumerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereRepositoryUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereUpdatedAt($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $project_id
 * @property string $title
 * @property string $details
 * @property string $priority
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TaskFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Task whereUpdatedAt($value)
 */
	class Task extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $project_id
 * @property int $task_id
 * @property string $start_time
 * @property string $end_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TimeEntryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TimeEntry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TimeEntry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TimeEntry query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TimeEntry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TimeEntry whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TimeEntry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TimeEntry whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TimeEntry whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TimeEntry whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TimeEntry whereUpdatedAt($value)
 */
	class TimeEntry extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

